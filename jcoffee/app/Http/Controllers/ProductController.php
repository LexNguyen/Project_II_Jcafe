<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function inputP(Request $request){
		return view('product.inputProduct');
	}
//edit get
	public function editProduct(Request $request){
        $product = null;
		
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
			'product' => $product
		]);
    }

	public function addProduct(Request $request){
		$id = $request->id;
		$name = $request->name;
		$sale = $request->sale;
        $price = $request->price;
		
		$data =[
			'name' => $name,
			'sale' => $sale,
			'price' => $price
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
		return redirect()->route('showP');
	}
}