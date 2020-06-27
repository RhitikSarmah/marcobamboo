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
        return User::create([
            'name' => 'Marco Bamboo Essentials',
            'email' => 'k.udyogghy@gmail.com',
            'password' => Hash::make('password'),
        ]);  
    }
}
