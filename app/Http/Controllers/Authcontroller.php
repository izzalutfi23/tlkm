<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class Authcontroller extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function postlogin(Request $request){
    	if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
    		return redirect('/adm');
    	}
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
