<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('backend.login');
    }

    public function postLogin(Request $request){
    	$arr=['mail'=>$request->mail,'password'=>$request->password];
    	if($request->remember ='Remember Me'){
    		$remember=true;
    	}else{
    		$remember=fales;
    	}
    	if(Auth::attempt($arr)){
    		return redirect()->intended('admin/home');
    	}else{
    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
    	}
    }
}
