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

			if (isset($id) && $id > 0) {
				DB::table('category')
				->where('id',$id)
				->update($name);	
			}else{
				DB::table('category')->insert($name);
			}
	
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
    
    //edit get
	public function editCategory(Request $request){
        $category = null;
		
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$categoryList = DB::table('category')
			->where('id',$request->id)
			->get();

			if($categoryList != null && count($categoryList)>0){
				$category = $categoryList[0];
			}
		}
		return view('category.edit')->with([
			'category' => $category
		]);
    }

	public function deleteCategory(Request $request){
		DB::table('category')
		->where('id', $request->id)
		->delete();
		return redirect()->route('showCategory');
	}

}
