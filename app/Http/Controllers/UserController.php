<?php

namespace App\Http\Controllers;

//Admin User Things, authentication, add new, etc

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function login(Request $request){	

    	return $request->all();

    }

    public function register(){
    	return view('add-user');
    }

    public function create(Request $request){
    	return $request->all();
    }

   
}
