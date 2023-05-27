<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserRole::truncate();
        UserRole::create([
            'title'=>'admin',
            'role_id'=>1
        ]);
        UserRole::create([
            'title'=>'user22',
            'role_id'=>2
        ]);
        UserRole::create([
            'title'=>'user33',
            'role_id'=>2
        ]);

    }
}
