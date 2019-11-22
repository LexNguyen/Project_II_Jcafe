<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
        	[
        		'Id'=>'NV1',
        		'name'=>'Nguyễn Quang Trung',
        		'age'=>20,
        		'phone'=>'123456789',
        		'mail'=>'kaka1239x199@gmail.com',
        		'password'=>bcrypt('1')
        	],
        	[
        		'Id'=>'NV2',
        		'name'=>'Nguyễn Quang Trung',
        		'age'=>20,
        		'phone'=>'12345678',
        		'mail'=>'nhanvien@gmail.com',
        		'password'=>bcrypt('1')
        	],
        ];
        DB::table('employees')->insert($data);
    }
}
