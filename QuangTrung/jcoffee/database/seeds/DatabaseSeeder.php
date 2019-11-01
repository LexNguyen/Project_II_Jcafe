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
