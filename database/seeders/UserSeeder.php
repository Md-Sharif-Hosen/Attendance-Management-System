<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         User::truncate();
         User::create([
            'username'=>'admin',
            'role_id'=>1,
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678')
         ]);
         User::create([
            'username'=>'user1',
            'role_id'=>2,
            'email'=>'sharif@gmail.com',
            'password'=>Hash::make('12345678')
         ]);
         User::create([
            'username'=>'user',
            'role_id'=>2,
            'email'=>'tarek@gmail.com',
            'password'=>Hash::make('12345678')
         ]);
         User::factory()->count(10)->create();

    }
}
