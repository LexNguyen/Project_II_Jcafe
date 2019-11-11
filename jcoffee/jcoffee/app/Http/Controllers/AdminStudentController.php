<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminStudentController extends Controller {

	public function editStudent(Request $request){
		$id = '';
		$name = '';
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$std = DB::table('demo')
			->where('id',$id)
			->get();

			if($std != null && count($std)>0){
				$id = $std[0]->id;
				$name = $std[0]->name;
			}
		}
		return view('editStudent')->with([
			'id'=>$id,
			'name'=>$name
		]);
	}

	public function input(Request $request){
		return view('demo');
	}

	public function addStudent(Request $request){
		$id = $request->id;
		$name = $request->name;

		DB::table('demo')->insert([
			'id' => $id,
			'name' => $name
		]);
		return redirect()->route('showPj');
	}

	public function editStuden(Request $request){
		$id = $request->id;
		$name = $request->name;

		DB::table('demo')
			->where('id',$id)
			->update([
				'id' => $id,
				'name' => $name
			]);
		return redirect()->route('showPj');
	}

	public function showP(Request $request){
		$productList = DB::table('demo')->get();
		$index = 1;
		return view('showDemo')->with([
			'productList' => $productList,
			'index' => $index
		]);
	}

	public function showAll(Request $request) {
		$id = $request->id_o;

		$list = DB::table('order_detail')
			->join('order', 
			'order.id', '=', 'order_detail.id_o')
			->where('class_group.class_id', $id)
			->paginate(10);

		return view('admin.group.index')->with([
				'list'      => $list,
				'classRoom' => $classRoom,
				'index'     => 1
			]);
	}

	public function viewAdd(Request $request) {
		return view('admin.student.add');
	}

	// public function addStudent(Request $request) {
	// 	$fullname = $request->fullname;
	// 	$age      = $request->age;
	// 	$email    = $request->email;
	// 	$address  = $request->address;
	// 	$rollno   = $request->rollno;

	// 	DB::table('students')->insert([
	// 			'fullname' => $fullname,
	// 			'age'      => $age,
	// 			'email'    => $email,
	// 			'address'  => $address,
	// 			'rollno'   => $rollno
	// 		]);

	// 	return redirect()->route('showAll');
	// }
}
