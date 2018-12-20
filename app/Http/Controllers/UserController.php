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
        $this->middleware('auth');
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
