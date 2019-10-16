<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller {
	public function showRegisterPage(Request $request) {
		return view('register');
	}

	public function register(Request $request) {
		// var_dump($request->all());
		$fullname = $request->fullname;
		$email    = $request->email;
		$password = $request->password;

		echo $fullname;
		//dung du lieu vs muc dich j cung dc
		
	}
}
