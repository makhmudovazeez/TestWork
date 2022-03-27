<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::updateOrCreate([
            'name' => 'super_admin'
        ],
        [
            'description' => 'Role that can do everything'
        ]);

        $role->syncPermissions(Permission::all());
    }
}
