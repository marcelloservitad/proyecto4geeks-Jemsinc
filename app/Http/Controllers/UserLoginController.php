<?php

namespace App\Http\Controllers;

use app\user;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getUserLogin()
    {
        return view('userLogin');
    }
    public function userAuth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $user = auth()->user();
            dd($user);
        }else{
            dd('your username and password are wrong.');            
        }
    }
}
}
