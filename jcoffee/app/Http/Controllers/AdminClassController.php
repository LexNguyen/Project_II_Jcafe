<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminClassController extends Controller
{
    //
    public function inputOrder(Request $request){
		return view('user.add');
	}
//edit get
	public function editOrder(Request $request){
        $user = null;
		
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$userList = DB::table('useer')
			->where('id',$request->id)
			->get();

			if($userList != null && count($userList)>0){
				$user = $userList[0];
			}
		}
		return view('user.edit')->with([
			'user' => $user
		]);
    }
    //edit post
    public function addOrder(Request $request){

		$id = $request->id;
		$name = $request ->name;
		$age = $request->age;
		$address = $request->address;
		$phone = $request->phone;

		$data =[
			'name'=>$name,
			'age'=>$age,
			'address' => $address,
			'phone' => $phone

		];
			if (isset($id) && $id > 0) {
				DB::table('user')
				->where('id',$id)
				->update($data);	
			}else{
				DB::table('user')->insert($data);
			}
	
		return redirect()->route('showOrder');
	}

	public function showOrder(Request $request){
		$userList = DB::table('user')->paginate(4);

		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*4+1;
		}
		return view('user.show')->with([
			'userList' => $userList,
			'index' => $index
		]);
	}

	public function deleteOrder(Request $request){
		DB::table('user')
		->where('id', $request->id)
		->delete();
		return redirect()->route('showOrder');
	}

}
