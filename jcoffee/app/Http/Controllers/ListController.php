<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller {
	public function showList(Request $request) {
		$list = [];
		for ($i = 0; $i < 10; $i++) {
			$list[] = [
				'name'       => "Ten ".$i,
				'department' => 'A '.$i,
				'phone'      => $i
			];
		}

		return view('list2')->with([
				'userList' => $list
			]);
	}
}
