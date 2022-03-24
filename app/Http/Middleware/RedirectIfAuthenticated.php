<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
{
    switch($guard){
        case 'admin':
            if (Auth::guard($guard)->check()) {
                return redirect('/admin');
            }
            break;
        default:
            if (Auth::guard($guard)->check()) {
                return redirect('/');
            }
            break;
    }
    return $next($request);
}

    protected function unauthenticated(Request $request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => $exception->getMessage()], 401);
            echo "lol";
        }
        $guard = Arr::get($exception->guards(), 0);
        switch($guard){
            case 'admin':
                $login = 'admin.login';
                echo "lol3";
                break;
            default:
                $login = 'login';
                echo "lol4";
                break;
        }
        return redirect()->guest(route($login));
    }


}
