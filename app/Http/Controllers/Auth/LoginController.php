<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function showLoginForm(){
        return view('login.registeration.login');
    }

    public function authenticated(Request $request){

        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        $user=User::where('email',$request->email)->first();

        $check_pass=Hash::check(request('password'),$user->password);
        if($check_pass==false)
        {
            return redirect()->route('home')->with('pass_error','the password does not match');
        }
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])
        && Auth::user()->role == 'SuperAdmin')
        {
                 return redirect('/dashboard');
            }
        elseif(Auth::user()->role=="salesperson")
            {
                return redirect('/dashboard');
            }
        elseif(Auth::user()->role=='inventory')
            {
                return redirect('/dashboard');
            }
        else
            {
                return redirect('/home');
            }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
