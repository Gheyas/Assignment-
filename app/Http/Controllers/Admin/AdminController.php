<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function changePassword(Request $request){
        $password_data = $this->validate($request, [
            'old' => 'required',
            'password' => 'required|confirmed'
        ]);
        $db_password = Admin::where('id', 1)->first()->password;
        $password = Hash::make($password_data['password']);
        if (Hash::check($password_data['old'], $db_password)) {
            Admin::where('id', 1)->update(array('password' => $password));
            return redirect()->back()->with('password', 'changed');
        } else{
            return redirect()->back();
        }
    }
}
