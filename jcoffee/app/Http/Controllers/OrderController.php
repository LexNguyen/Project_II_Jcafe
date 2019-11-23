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

		$id_o = DB::table('order_detail')->value('id_o');
		$order_date = $request ->order_date;
		$total_price=DB::table('order_detail')
						->select('id_o',DB::raw('sum(price_detail) as total'))
						->where('id_o',$id_o)
						->groupBy('id_o')
						->first();

		$data =[
			'order_date'=>DB::table('order')
						  ->where('id',$id_o)
						  ->value('order_date'),
			'total_price'=>$total_price->total
		];
			if (isset($id) && $id > 0) {
				DB::table('order')
				->where('id',$id_o)
				->update($data);	
			}else{
				DB::table('order')->insert($data);
			}
	
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
