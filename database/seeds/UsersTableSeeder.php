<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User;

        $user1->name            = "admin";
        $user1->username        = "admin";
        $user1->email           = "admin@gmail.com";
        $user1->password        = Hash::make('1234test');
        
        $user1->save();
    }
}
