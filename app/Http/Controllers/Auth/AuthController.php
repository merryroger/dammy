<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    protected $retcode = 404;

    public function checkAuthCode(Request $request)
    {
        $rq_data = $request->request->all();

        if (isset($rq_data['type']) && isset($rq_data['code'])) {   // Checking necessary request parameters

            $key = base64_decode($rq_data['code']);
            $action = strtolower($rq_data['type']);

            if (Cache::has($key)) {                                 // Checking presence of the key in our cache
                $user_id = Cache::pull($key);
                $user_model = User::valid()->find($user_id);        // Trying to pick user`s data as model

                if ($user_model != null) {                          // All the next actions for true user only
                    $session = $request->session();

                    switch ($action) {
                        case 'authentication':
                            $this->prepareSession($user_model, $session);
                            return redirect()->route('desktop');
                        default:
                    }
                    dd($user_model);
                }
            }
        }

        abort(404);
    }

    public function listenRequest(Request $request)
    {
        $_response = [];
        if ($request->method() == 'POST') {
            if ($request->session()->has('user')) {
                $_response['message_panel'] = view('services.auth_already_exists')->render();
                $this->retcode = 303;
            } elseif (User::valid()->count() > 0) {
                $user = $this->findUser(User::valid()->get(), $request->request->all());
                if ($user && $user->email) {
                    $user->auth_type = 'authentication';
                    $user->link_hash = Hash::make(microtime(true), ['rounds' => 14]);
                    $this->setCache($user);
                    $this->sendMail($user);
                    $_response['message_panel'] = view('services.auth_mail_sent')->render();
                    $this->retcode = 200;
                }
            }

        } else {
            $this->retcode = 405; // Wrong request method
        }

        $_response['retcode'] = $this->retcode;

        return response()->json($_response);
    }

    public function logoff(Request $request)
    {
        if ($request->session()->exists('user')) {
            $request->session()->forget('user');
        }

        return redirect()->route('guest.lvl1.sections');
    }

    protected function prepareSession($model, $session)
    {
        $user = collect($model)->map(function ($value, $key) {
            switch ($key) {
                case 'roles':
                    return preg_split("/,/", $value);
                default:
                    return $value;
            }
        })->only(['id', 'name', 'email', 'roles', 'userdir'])->all();

        $session->put('user', $user);
    }

    protected function findUser($userset, $rq_params)
    {
        $users = new User();
        $user = $users->getUserByCheckPhrase($userset, $rq_params);

        return $user;
    }

    protected function setCache($user)
    {
        $expiresAt = now()->addMinutes(3);
        Cache::put($user->link_hash, $user->id, $expiresAt);
    }

    protected function sendMail($user)
    {
        Mail::send('mail.auth_request', ['user' => $user], function ($message) use ($user) {
            $message->from(config('mail.from')['address'], config('mail.from')['name']);
            $message->to($user->email);
            $message->subject(trans('auth.auth_ref', [], 'ru'));
        });
    }

}
