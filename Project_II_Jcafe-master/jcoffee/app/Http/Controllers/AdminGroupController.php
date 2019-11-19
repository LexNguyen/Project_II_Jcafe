<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminGroupController extends Controller {
	public function showAll(Request $request) {
		$id = $request->id;

		$classRoom = DB::table('class_room')
			->where('id', $id)
			->get();
		$classRoom = $classRoom[0];

		$list = DB::table('students')
			->join('class_group', 'class_group.student_id', '=', 'students.id')
			->where('class_group.class_id', $id)
			->paginate(10);

		return view('admin.group.index')->with([
				'list'      => $list,
				'classRoom' => $classRoom,
				'index'     => 1
			]);
	}
}
