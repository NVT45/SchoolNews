<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
            $array = ['email'=> $request->email,'password'=>$request->password];
            if($request->remember = 'Remember Me'){
                $remember = true;
            }else{
                $remember =false;
            }
            if( Auth::attempt($array,$remember)){
               return redirect()->intended('admin/category');
            }else{
                return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
            }

    }
}
