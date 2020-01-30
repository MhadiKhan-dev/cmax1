<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('users')->delete();
      User::create(array('username' => 'admin', 'password' => Hash::make('admin'), 'email' => 'setkyar16@gmail.com'));


    }
}
