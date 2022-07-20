<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data for permissions table
        $data = [
            //For Role System...
            ['name' => 'role-access'],
            ['name' => 'role-list'],
            ['name' => 'role-create'],
            ['name' => 'role-show'],
            ['name' => 'role-edit'],
            ['name' => 'role-delete'],

            //For User System...
            ['name' => 'user-access'],
            ['name' => 'user-list'],
            ['name' => 'user-create'],
            ['name' => 'user-show'],
            ['name' => 'user-edit'],
            ['name' => 'user-delete']

        ];
        Permission::insert($data);
    }
}
