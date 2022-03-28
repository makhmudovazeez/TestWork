<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate([
            'email' => 'azeezmakhmudov@gmail.com'
        ],
        [
            'fullname' => 'Makhmudov Azizbek Qobiljon o`g`li',
            'password' => bcrypt('123'),
            'remember_token' => Str::random(50)
        ]);

        $user->givePermissionTo(Permission::all()->pluck('name')->toArray());
        $user->assignRole(Role::first());
    }
}
