<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // check authentication here
    }

    public function home(){

    	if(Auth::user()) return view('dashboard');
    	return view('login');
    }

   
}
