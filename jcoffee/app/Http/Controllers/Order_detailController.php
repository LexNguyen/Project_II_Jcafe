<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Order_detailController extends Controller
{
    //
    public function form(Request $request){
		return view('order_detail.productInput');
	}

	public function editForm(Request $request){
		$order_detail = null;
		
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$order_detailList = DB::table('order_detail')
			->where('id',$request->id)
			->get();

			if($order_detailList != null && count($order_detailList)>0){
				$order_detail = $order_detailList[0];
			}
		}
		return view('order_detail.edit')->with([
			'order_detail' => $order_detail
		]);
	}

	public function addOrder_detail(Request $request){
		// var_dump($request->all());
		$id = $request->id;
		$id_p = $request->id_p;
		$id_o = $request->id_o;

		$price = DB::table('products')->where('id',$id_p)->value('price');
		$number = DB::table('order_detail')->where('id_o',$id_o)->value('number');
		$sale = DB::table('products')->where('id',$id_p)->value('sale');

		$number = $request->number;
		$table_number = $request->table_number;
		$price_detail = ($price-$price*$sale/100)*$number;
		$customer_request = $request->customer_request;

		$data = [
			'id_p' => $id_p,
			'id_o' =>$id_o,
			'number' =>$number,
			'table_number' =>$table_number,
			'price_detail' =>$price_detail,
			'customer_request'=>$customer_request
		];

		if (isset($id) && $id > 0) {
			DB::table('order_detail')->update($data);
		}else{
			DB::table('order_detail')->insert($data);
		}
		
		return redirect()->route('show');
	}

	// public function

	public function show(Request $request){
		// $productList = DB::table('order_detail')->get();

		$order_detail = DB::table('order_detail')
		->leftJoin('order','order.id','=','order_detail.id_o')
		->leftJoin('products','products.id','=','order_detail.id_p')
		->select('order_detail.id','id_o','id_p','table_number','customer_request','products.name','number','order_detail.price_detail')
		->get();

		$index = 1;
		return view('order_detail.showOrder')->with([
			'order_detail' => $order_detail,
			'index' => $index
		]);
	}

	public function deleteOrder_detail(Request $request){
		DB::table('order_detail')->where('id',$request->id)
		->delete();
	}

}
