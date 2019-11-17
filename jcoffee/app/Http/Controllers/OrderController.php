<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function inputOrder(Request $request){
		return view('order.inputOrder');
	}
//edit get
	public function editOrder(Request $request){
        $order = null;
		
		if(isset($request->id)&& $request->id>0){
			$id = $request->id;

			$orderList = DB::table('order')
			->where('id',$request->id)
			->get();

			if($orderList != null && count($orderList)>0){
				$order = $orderList[0];
			}
		}
		return view('order.edit')->with([
			'order' => $order
		]);
    }
    //edit post
    public function addOrder(Request $request){
		$order_date = $request->order_date;

		$id_o = DB::table('order_detail')->value('id_o');
		$total_price = DB::table('order_detail')->where('id_o',$id_o)
		->value('price_detail');

		$data =[
			'order_date' => $order_date,
			'total_price' => $total_price
		];
			DB::table('order')->insert($data);
	
		return redirect()->route('showOrder');
	}
	
	public function editOrdr(Request $request){
		$id = $request->id;
		$order_date = $request->order_date;
		$total_price = DB::table('order_detail')->where('id_o',$id)->value('price_detail');

		$data =[
			'order_date' => $order_date,
			'total_price' => $total_price
		];
			DB::table('order')
			->where('id',$id)
			->update($data);
	
		return redirect()->route('showOrder');
	}

	public function showOrder(Request $request){
		$orderList = DB::table('order')->get();
		$index = 1;
		return view('order.showOrder')->with([
			'orderList' => $orderList,
			'index' => $index
		]);
	}

	public function deleteOrder(Request $request){
		DB::table('order')
		->where('id',$request->id)
		->delete();

	}

}
