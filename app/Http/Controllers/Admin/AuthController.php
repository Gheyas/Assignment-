<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    function __construct(){
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    //
    public function showLoginForm(){
        return view('back.login');
    }

    public function login(Request $request){
        $credentials = ['username' => $request->username, 'password' => $request->password];

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect(route('admin.index'));
        }else{
            return back()->with('login', 'failed');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect(route('login'));
    }
    
    
}
