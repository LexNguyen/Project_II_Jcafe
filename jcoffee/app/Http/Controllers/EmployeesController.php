<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeesController extends Controller
{
    //
    public function inputEmployee(Request $request){
		return view('employee.inputEmployee');
	}
//edit get
	public function editEmployee(Request $request){
        $employee = null;
        
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$employeeList = DB::table('employees')
			->where('id',$request->id)
			->get();

			if($employeeList != null && count($employeeList)>0){
				$employee = $employeeList[0];
			}
		}
		return view('employee.editEmployee')->with([
			'employee' => $employee
		]);
    }

	public function addEmployee(Request $request){
		$id = $request->id;
		$password = $request->password;
		$name = $request->name;
		$address = $request->address;
        $phone = $request->phone;
        $age = $request->age;
		
		$data =[
			'password' => $password,
			'name' => $name,
			'address' => $address,
            'phone' => $phone,
            'age' => $age
		];
		if (isset($id) && $id > 0) {
			DB::table('employees')
			->where('id',$id)
			->update($data);
		} else {
			DB::table('employees')->insert($data);
		}
	
		return redirect()->route('showEmployee');
	}

	public function showEmployee(Request $request){
		$employeeList = DB::table('employees')->paginate(4);
		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*4+1;
		}
		return view('employee.showEmployee')->with([
			'employeeList' => $employeeList,
			'index' => $index
		]);
	}

	public function deleteEmployee(Request $request){
		DB::table('employees')
		->where('id', $request->id)
		->delete();
		return redirect()->route('showEmployee');
	}
}
