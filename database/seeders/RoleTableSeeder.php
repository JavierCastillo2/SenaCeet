<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'teacher',
            'guard_name'=>'web',
        ]);
        Role::create([
            'name'=>'student',
            'guard_name'=>'web',
        ]);

    }
}
