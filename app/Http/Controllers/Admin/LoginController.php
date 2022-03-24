<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use function back;
use function redirect;
use function route;
use function view;


class LoginController extends Controller
{
    use AuthenticatesUsers;




    /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * @return Factory|View
     */
    public function showLoginForm()
    {


        return view('admin.auth.login');

    }

    public function login(Request $request)
{
    $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
    ]);
    if (Auth::guard('admin')->attempt([
        'email' => $request->email,
        'password' => $request->password
    ], $request->get('remember'))) {
        return redirect()->intended(route('admin.dashboard'));
    }
    return back()->withInput($request->only('email', 'remember'));
}

public function logout(Request $request)
{
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    return redirect()->route('admin.login');
}

}
