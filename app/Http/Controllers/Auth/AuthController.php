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
        if($rq_data['type'] && $rq_data['code']) {
            $key = base64_decode($rq_data['code']);
            if(Cache::has($key)) {
                $id = Cache::pull($key);
                $user = User::valid()->find($id)->getAttributes();
                dd($user);
            }
        }

        abort(404);
    }

    public function listenRequest(Request $request)
    {
        $_response = [];
        if ($request->method() == 'POST') {

            if (User::valid()->count() > 0) {
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
