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

	public function addOrder_detail(Request $request){
		// var_dump($request->all());
		$id_p = $request->id_p;
		$id_o = $request->id_o;

		$price = DB::table('products')->where('id',$id_p)->value('price');
		$number = DB::table('order_detail')->where('id_o',$id_o)->value('number');
		$sale = DB::table('products')->where('id',$id_p)->value('sale');

		$number = $request->number;
		$table_number = $request->table_number;
		$price_detail = ($price-$price*$sale/100)*$number;
		$customer_request = $request->customer_request;

		DB::table('order_detail')->insert([
			'id_p' => $id_p,
			'id_o' =>$id_o,
			'number' =>$number,
			'table_number' =>$table_number,
			'price_detail' =>$price_detail,
			'customer_request'=>$customer_request
		]);
		return redirect()->route('show');
	}

	public function show(Request $request){
		// $productList = DB::table('order_detail')->get();

		$productList = DB::table('order_detail')
		->leftJoin('order','order.id','=','order_detail.id_o')
		->leftJoin('products','products.id','=','order_detail.id_p')
		->select('id_o','id_p','table_number','customer_request','products.name','number','order_detail.price_detail')
		->get();
		// $productIdList = products::lists('name','id');
		// $orderIdList = order::lists('id','id');
		$index = 1;
		return view('order_detail.showProduct')->with([
			'productList' => $productList,
			'index' => $index
			// 'productIdList'=>$productIdList,
			// 'orderIdList'=>$orderIdList
		]);
	}

}
