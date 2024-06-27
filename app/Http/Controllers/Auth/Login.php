<?php

namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
USE Illuminate\Support\Facades\Hash;


class Login extends Controller
{
    public function index(){


    return view('login.index');
        
    }




    public function login(Request $request)

    {
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){

            return redirect()->back()->with('error','Data tidak valid');
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {


                $request->session()->regenerate();

                return redirect()->intended('/home');
            
        }


        return redirect()->back()->withInput()->with('error', 'Email atau sandi salah');
    }





    public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/login');

        
    }
        
    


}