<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function index(){
        $user = User::all();
        $data = [
            'user' => $user
        ];
        return view('admin.user', $data);
    }

    public function store(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('user');
    }

    public function destroy($id){
        User::where('id',$id)->delete();
        return redirect('user');
    }
}
