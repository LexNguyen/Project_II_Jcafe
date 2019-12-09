<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function inputOrder(Request $request){
		$employee = DB::table('employees')->select('id')->get();
		return view('order.inputOrder')->with([
			'employee' => $employee
		]);
	}

    public function addOrder(Request $request){

		$id_o = DB::table('order_detail')->value('id_o');
		$id_e = $request->id_e;
		$order_date = $request ->order_date;
		$total_price=DB::table('order_detail')
						->select('id_o',DB::raw('sum(price_detail) as total'))
						->where('id_o',$id_o)
						->groupBy('id_o')
						->first();

		$data =[
			'id_e' => $id_e,
			'order_date' => $order_date,
			'total_price' =>$total_price->total
		];
		
		DB::table('order')->insert($data);
	
		return redirect()->route('showOrder');
	}

	public function showOrder(Request $request){
		$orderList = DB::table('order')->paginate(4);

		$index = 1;
		if (isset($request->page)) {
			$index = ($request->page-1)*4+1;
		}
		return view('order.showOrder')->with([
			'orderList' => $orderList,
			'index' => $index
		]);
	}

	public function deleteOrder(Request $request){
		DB::table('order')
		->where('id', $request->id)
		->delete();
		return redirect()->route('showOrder');
	}

}
