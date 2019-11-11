<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 * document : https://laravel.com/docs/5.8/seeding
	 * @return void
	 */
	public function run() {
		// $this->call(UsersTableSeeder::class);
		$currentTime = date('Y-m-d H:i:s');

		// $o1=DB::table('products')->where('id','c')->value('price');
		
		//  DB::table('order_detail')->insert([
		// 	'id_o' => '1',
		// 	'id_p'=> 'c',
		// 	'table_number'=>3,
		// 	'number'=>2,
		// 	'customer_request'=>'co da',
		// 	'price_detail'=>$o1*2
		// 			]);

		
			// 	'id' => '1',
			// 	'order_date' => '2019-1-1',
			// ]);

		// DB::table('students')->insert([
		// 		'rollno'     => '20060780',
		// 		'fullname'   => 'TRAN VAN DIEP',
		// 		'email'      => 'tranvandiep.it@gmail.com',
		// 		'address'    => 'Nam Dinh',
		// 		'age'        => 32,
		// 		'created_at' => $currentTime,
		// 		'updated_at' => $currentTime
		// 	]);

		// DB::table('class_room')->insert([
		// 		'class_name' => 'T1811E',
		// 		'created_at' => $currentTime,
		// 		'updated_at' => $currentTime
		// 	]);

		// DB::table('class_room')->insert([
		// 		'class_name' => 'T1908M',
		// 		'created_at' => $currentTime,
		// 		'updated_at' => $currentTime
		// 	]);
	}
}
