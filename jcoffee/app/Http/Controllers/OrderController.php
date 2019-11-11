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
	// public function editOrder(Request $request){
    //     $order = null;
		
	// 	if(isset($request->id)&& $request->id>0){
	// 		$id = $request->id;

	// 		$orderist = DB::table('order')
	// 		->where('id',$request->id)
	// 		->get();

	// 		if($orderList != null && count($orderList)>0){
	// 			$order = $orderList[0];
	// 		}
	// 	}
	// 	return view('order.edit')->with([
	// 		'order' => $order
	// 	]);
    // }
    //edit post
    // public function edit(Request $request){

    //     $id = $request->id;
	// 	$order_date = $request->order_date;
        
    //     $price = DB::table('order_detail')->where('id',$id_o)->value('price');
    //     $total_price = DB::table('order_detail')->where('id',$id_o)->value(sum('price_detail'));

    //     // DB::table('products')
	// 	// 	->where('id',$id)
	// 	// 	->update([
	// 	// 		'name' => $name,
	// 	// 		'sale' => $sale,
	// 	// 		'price' => $price
    //     //     ]);
    //     // //return redirect()->route('showP');
    //     // return view ('product.showP');
    //     echo($total_price);
    // }
 
	public function addOrder(Request $request){
		$id = $request->id;
		$order_date = $request->order_date;
        
		DB::table('order')->insert([
			'id' => $id,
			'order_date' => $order_date,
			
		]);
	
		return redirect()->route('showOrder');
	}


	public function showOrder(Request $request){
        $id = $request->id;
		$order_date = $request->order_date;
        $total_price = $request->total_price;
        // $post->save();

        DB::table('order')
			->where('id',$id)
			->update([
				'order_date' => $order_date,
				'total_price' => $total_price,
            ]);
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
