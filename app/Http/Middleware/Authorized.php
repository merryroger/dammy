<?php

namespace App\Http\Middleware;

use Closure;

class Authorized
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $fault = true;
        if ($request->session()->exists('user')) {
            $user = $request->session()->get('user');

            if (isset($user) && $user['roles']) {
                if (preg_grep("/^(master|admin|manager)$/", $user['roles'])) {
                    $fault = false;
                }
            }
        }

        return ($fault) ? redirect()->route('guest.lvl1.sections') : $next($request);
    }
}
