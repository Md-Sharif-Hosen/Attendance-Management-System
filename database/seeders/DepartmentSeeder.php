<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Department::truncate();
        Department::create([
            'department_title'=>'Information Technology (IT) Department'
        ]);
        Department::create([
            'department_title'=>'Finance Department:'
        ]);
        Department::create([
            'department_title'=>'Marketing Department'
        ]);
        Department::create([
            'department_title'=>'Human Resources (HR) Department'
        ]);
        Department::create([
            'department_title'=>'Customer Service Department'
        ]);
    }
}
