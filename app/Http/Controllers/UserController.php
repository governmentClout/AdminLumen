<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function login(Request $request){	

    	$this->validate($request, [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email|unique:users',
        'password'=>'required'
   		 ]);

    	 $credentials = $request->only(['email','password']);

    	 Auth::attempt($credentials) ? view('dashboard') : view('login')->with(['error'=>'Login failed'])
    	 if () {
            return'logged in';
        } else {
            return 'not logged in';
        }
    	return $request->all();

    }

    public function register(){

    	return Auth::check() ? view('add-user') : view('login');
    	
    }

    public function create(Request $request){
    	return $request->all();
    }

   
}
