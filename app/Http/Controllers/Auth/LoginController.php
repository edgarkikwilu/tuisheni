<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    //protected $redirectTo = '/home';

    // protected function redirectTo(){
    //     if (Auth::user()->type == 'student') {
    //         return redirect()->route('assessment',1);
    //     } else if(Auth::user()->type == 'teacher') {
    //         return redirect()->route('dashboard');
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::guard()->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            if (Auth::user()->type == 'student') {
                return redirect()->route('profile');
            } else if (Auth::user()->type == 'teacher') {
                return redirect()->route('teacher.dashboard');
            }
            
        }else {
            return redirect()->route('login')->withInput();
        }
    }
}
