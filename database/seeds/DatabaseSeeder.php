<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('jobs')->delete();
 
        $jobs = array(
            ['id' => 1, 'name' => 'Teszt 1', 'created' => new DateTime, 'activated' => new DateTime, 'orientation' => 1, 'sales_email' => 'aaaa@aaaaa.aaa', 'status' => 1],
            ['id' => 2, 'name' => 'Teszt 2', 'created' => new DateTime, 'activated' => new DateTime, 'orientation' => 2, 'sales_email' => 'bbbb@aaaaa.aaa', 'status' => 1],
            ['id' => 3, 'name' => 'Teszt 3', 'created' => new DateTime, 'activated' => new DateTime, 'orientation' => 3, 'sales_email' => 'cccc@aaaaa.aaa', 'status' => 2],
            ['id' => 4, 'name' => 'Teszt 4', 'created' => new DateTime, 'activated' => new DateTime, 'orientation' => 4, 'sales_email' => 'dddd@aaaaa.aaa', 'status' => 3],
        );
 
        DB::table('jobs')->insert($jobs);
	}

}
