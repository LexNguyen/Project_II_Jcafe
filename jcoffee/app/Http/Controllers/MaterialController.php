<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
    //
    public function inputMaterial(Request $request){
		return view('material.inputMaterial');
	}

	public function addMaterial(Request $request){
		$id = $request->id;
		$name = $request->name;
        $import_date = $request->import_date;
        $number = $request->number;
        $price = $request->price;
        // $format = number_format($price);

		$data =[
			'name' => $name,
            'import_date' => $import_date,
            'number' => $number,
			'price' => $price
		];

		DB::table('material')->insert($data);
	
		return redirect()->route('showMaterial');
	}

	public function showMaterial(Request $request){
		$materialList = DB::table('material')->paginate(4);
		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*4+1;
		}
		return view('material.showMaterial')->with([
			'materialList' => $materialList,
			'index' => $index
		]);
	}

	public function deleteMaterial(Request $request){
		DB::table('material')
		->where('id', $request->id)
		->delete();
	}
}
