<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function inputCategory(Request $request){
		return view('category.inputCategory');
	}

    public function addCategory(Request $request){

		$name = $request ->name;

		$data=[
			'name' => $name
		];

		DB::table('category')->insert($data);
	
		return redirect()->route('showCategory');
	}

	public function showCategory(Request $request){
		$categoryList = DB::table('category')->paginate(4);

		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*4+1;
		}
		return view('category.showCategory')->with([
			'categoryList' => $categoryList,
			'index' => $index
		]);
    }

	public function deleteCategory(Request $request){
		DB::table('category')
		->where('id', $request->id)
		->delete();
		return redirect()->route('showCategory');
	}

}
