<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminStudentController extends Controller {
	public function showAll(Request $request) {
		$studentList = DB::table('students')->paginate(10);

		return view('admin.student.index')->with([
				'studentList' => $studentList,
				'index'       => 1
			]);
	}

	public function viewAdd(Request $request) {
		return view('admin.student.add');
	}

	public function addStudent(Request $request) {
		$fullname = $request->fullname;
		$age      = $request->age;
		$email    = $request->email;
		$address  = $request->address;
		$rollno   = $request->rollno;

		DB::table('students')->insert([
				'fullname' => $fullname,
				'age'      => $age,
				'email'    => $email,
				'address'  => $address,
				'rollno'   => $rollno
			]);

		return redirect()->route('showAll');
	}

	public function searchEmail(Request $request) {
		$email    = $request->email;
		$students = DB::table('students')
			->where('email', $email)
			->get();
		if ($students != null && count($students) > 0) {
			return 'failed';
		}
		return 'success';
	}

	public function deleteStudent(Request $request) {
		//request->id
		$id = $request->id;

		DB::table('students')
			->where('id', $id)
			->delete();

		echo "Student is deleted!";
	}
}
