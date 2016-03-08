<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
    	User::create(array(
	        'name'     => 'Marcus Christiansen',
	        'email'    => 'marcus@clc.agency',
	        'password' => Hash::make('5ecret_p@55w0rd'),
	    ));
    }
}
