<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"  => "ahmed",
            "email" =>"ahmed@gmail.com",
            "password" => Hash::make('12345678'),
            'access'  => 2
        ]);
    }
}
