<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'f_name' => 'Đinh',
            'l_name' => 'Hằng',
            'phone' => '11212121212',
            'address' => 'Ninh B`inh',
            'rule' => 1,
            'sex' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
