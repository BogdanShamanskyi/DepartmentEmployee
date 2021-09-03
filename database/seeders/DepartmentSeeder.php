<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            'Marketing',
            'Operations',
            'Finance',
            'Sales',
            'Purchase',
            'Human Resource',
        ];

        foreach ($departments as $department) {
            Department::create([
                'name' => $department,
                'slug' => Str::slug($department)
            ]);
        }
    }
}
