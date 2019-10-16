<?php

namespace App\Http\Controllers;

use App\Students;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller {
	public function viewAdd(Request $request) {
		$student = null;
		if (isset($request->id) && $request->id > 0) {
			//lay du lieu cua sinh trong database
			$studentList = DB::table('students')
				->where('id', $request->id)
				->get();
			if ($studentList != null && count($studentList) > 0) {
				$student = $studentList[0];
			}
		}

		return view('student.view_add')->with([
				'student' => $student
			]);
	}

	public function addStudent(Request $request) {
		# code...
		// var_dump($request->all());
		$currentTime = date('Y-m-d H:i:s');
		$id          = $request->id;

		$data = [
			'rollno'     => $request->rollno,
			'fullname'   => $request->fullname,
			'age'        => $request->age,
			'address'    => $request->address,
			'email'      => $request->email,
			'created_at' => $currentTime,
			'updated_at' => $currentTime
		];

		if (isset($id) && $id > 0) {
			//update
			DB::table('students')
				->where('id', $id)
				->update($data);
		} else {
			//insert
			DB::table('students')->insert($data);
		}

		return redirect()->route('viewAdd');
	}

	public function showAll(Request $request) {
		# code...
		// $studentList = DB::table("students")
		// 	->paginate(6);
		$studentList = Students::paginate(6);

		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*6+1;
		}

		return view('student.index')->with([
				'index'       => $index,
				'studentList' => $studentList
			]);
	}

	public function deleteStudent(Request $request) {
		$id = $request->id;
		// DB::table('students')
		// 	->where('id', $id)
		// 	->delete();
		Students::where('id', $id)->delete();
	}

	public function showGroup(Request $request) {
		$data = DB::table('students')
			->leftJoin('class_group', 'class_group.student_id', '=', 'students.id')
			->leftJoin('class_room', 'class_room.id', '=', 'class_group.class_id')
			->select('students.fullname', 'students.address', 'class_room.class_name')
			->get();

		return view('student.group')->with([
				'index' => 1,
				'data'  => $data
			]);
	}
}
