<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function checkLogin(Request $request){
        $username = $request->usermname;
        $password = $request->password;
        $auth = Auth::attempt(['username'=> $username, 'password'=>$password]);

        if($auth){
            return redirect()->route('dashboard');
        }else {
            return redirect()->route('login')->with('error','Tên Đăng Nhập hoăc mật khẩu Đúng');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
