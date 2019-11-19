<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminClassController extends Controller {
	public function showAll(Request $request) {
		$classList = DB::table('class_room')->paginate(10);

		return view('admin.class.index')->with([
				'classList' => $classList,
				'index'     => 1
			]);
	}
}
