<?php

namespace App\Http\Controllers\Adminauth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    protected $redirectTo = '/home';
    protected $guard='admin';
    public function showLoginForm(){
            
      
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
 
        return redirect('/login');
        //return Redirect::to('/')->send();
    }
}
