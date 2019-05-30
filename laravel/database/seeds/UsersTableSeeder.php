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
        User::insert([
            [
                'name'      => 'Administrator',
                'email'     => 'administrator@mail.com',
                'password'  => 'secret'
            ]
        ]);
    }
}
