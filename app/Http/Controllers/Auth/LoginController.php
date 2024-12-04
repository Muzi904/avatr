<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function loadLoginPage()
    {
        if (auth()->user()) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (!empty($input['remember'])) {
                setcookie("email", $input['email'], time() + 2147483647);
                setcookie("password", $input['password'], time() + 2147483647);
            } else {
                setcookie("email", '');
                setcookie("password", '');
            }

            if (auth()->user()->status != 'Y') {
                return redirect()->route('login')
                    ->with('error', 'Your account is deactivated. Please contact your administrator');
            }

            // last login and login count
            // $userLogin = UserLogin::where('user_id', auth()->user()->id)->where('month', date('m'))->where('year', date('Y'))->first();
            // if ($userLogin == null) {
            //     $userLogin = new UserLogin();
            //     $userLogin->user_id = auth()->user()->id;
            //     $userLogin->month = date('m');
            //     $userLogin->year = date('Y');
            //     $userLogin->login_count = 1;
            //     $userLogin->last_login = date('Y-m-d H:i:s');
            //     $userLogin->save();
            // } else {
            //     $userLogin->login_count = $userLogin->login_count + 1;
            //     $userLogin->last_login = date('Y-m-d H:i:s');
            //     $userLogin->save();
            // }

            // if (auth()->user()->type == 'super-admin') {
            //     return redirect()->route('super-admin.home');
            // } else if (auth()->user()->type == 'admin') {
            //     return redirect()->route('admin.dashboard');
            // } else {
            return redirect()->route('admin.dashboard');
            // }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}
