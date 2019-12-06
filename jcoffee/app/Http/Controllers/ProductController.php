<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function inputP(Request $request){
		$category = DB::table('category')->select('id','name')->get();
		return view('product.inputProduct')->with([
			'category' => $category
		]);
	}
//edit get
	public function editProduct(Request $request){
		$product = null;
		
		$category = DB::table('category')->select('id','name')->get();
		
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$productList = DB::table('products')
			->where('id',$request->id)
			->get();

			if($productList != null && count($productList)>0){
				$product = $productList[0];
			}
		}
		return view('product.edit')->with([
			'product' => $product,
			'category' => $category
		]);
    }

	public function addProduct(Request $request){
		$id = $request->id;
		$id_cg = $request->id_cg;
		$name = $request->name;
		$sale = $request->sale;
		$price = $request->price;
		$price_format = number_format($price);
		
		$data =[
			'id_cg' => $id_cg,
			'name' => $name,
			'sale' => $sale,
			'price' => $price_format
		];
		if (isset($id) && $id > 0) {
			DB::table('products')
			->where('id',$id)
			->update($data);
		} else {
			DB::table('products')->insert($data);
		}
	
		return redirect()->route('showP');
	}

	public function showP(Request $request){
		$productList = DB::table('products')->paginate(4);
		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*4+1;
		}
		return view('product.showP')->with([
			'productList' => $productList,
			'index' => $index
		]);
	}

	public function deleteProduct(Request $request){
		DB::table('products')
		->where('id', $request->id)
		->delete();
	}
}
