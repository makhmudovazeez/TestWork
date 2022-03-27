<?php

namespace Database\Seeders;

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
        $permissions = [
            ['name' => 'permission index', 'description' => 'Show permission list'],
            ['name' => 'role index', 'description' => 'Show role list'],
            ['name' => 'user index', 'description' =>'Show user list'],
            ['name' => 'user show', 'description' =>'Show specific user'],
            ['name' => 'user edit', 'description' =>'Show specific user'],
            ['name' => 'user delete', 'description' =>'Show specific user'],
        ];

        foreach($permissions as $permission){
            Permission::firstOrCreate([
                'name' => $permission['name']
            ],
            [
                'description' => $permission['description']
            ]);
        }
    }
}
