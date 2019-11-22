<?php

use Illuminate\Database\Seeder;

class MigrialTableSeeder extends Seeder
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
        		'id'=>'SP3',
        		'name'=>'cafe đen',
        		'import_date'=>'20/10/1999'
        		'number'=>20,
        		'price'=>200000,
        	],
        ];
        DB::table('material')->insert($data);
    }
}
		