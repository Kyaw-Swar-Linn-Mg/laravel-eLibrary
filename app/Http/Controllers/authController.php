<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Auth;

class authController extends Controller
{


    public function getLogout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function postRegister(Request $request){

        $this->validate($request,[

            'name'=>'required|unique:users',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password'

        ]);

        $user = new User();

        $user -> name = $request['name'];
        $user -> email = $request['email'];
        $user -> password = bcrypt($request['password']);

        $user -> save();
        return redirect()->route('login')->with('info','You have been created new an account.');


    }

    public function postLogin(Request $request){

        $this->validate($request,[

            'name'=>'required|exists:users',
            'password'=>'required|min:6'

        ]);

        $name = $request['name'];
        $password = $request['password'];

        if(Auth::attempt(['name'=>$name,'password'=>$password])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('err', "Authentication failed.");
        }
    }
}
