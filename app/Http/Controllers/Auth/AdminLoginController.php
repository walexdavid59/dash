<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:admin',['except' => ['logout']]);
    }

    //function to show admin login form
    public function showLoginForm() {
        return view('auth.login');
    }
    //function to login admins
    public function login(Request $request) {
        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);
        //attempt to login the admins in
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // dd(auth()->user());
            return redirect()->action('Admin\AdminController@home');
        }
            
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('email'))
        ->with('success','Invalid user login details');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

}