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
    //edit post
    public function edit(Request $request){

        $id = $request->id;
		$name = $request->name;
		$sale = $request->sale;
        $price = $request->price;
        // $post->save();

        DB::table('products')
			->where('id',$id)
			->update([
				'name' => $name,
				'sale' => $sale,
				'price' => $price
            ]);
        //return redirect()->route('showP');
        return view ('product.showP');
    }
 
	public function addProduct(Request $request){
		$id = $request->id;
		$name = $request->name;
		$sale = $request->sale;
        $price = $request->price;
        
		DB::table('products')->insert([
			'id' => $id,
			'name' => $name,
			'sale' => $sale,
			'price' => $price
		]);
	
		return redirect()->route('showP');
	}

	public function showP(Request $request){
        $id = $request->id;
		$name = $request->name;
		$sale = $request->sale;
        $price = $request->price;
        // $post->save();

        DB::table('products')
			->where('id',$id)
			->update([
				'name' => $name,
				'sale' => $sale,
				'price' => $price
            ]);
		$productList = DB::table('products')->get();
		$index = 1;
		return view('product.showP')->with([
			'productList' => $productList,
			'index' => $index
		]);
	}

	public function deleteProduct(Request $request){
		DB::table('products')
		->where('id',$request->id)
		->delete();

	}

}
