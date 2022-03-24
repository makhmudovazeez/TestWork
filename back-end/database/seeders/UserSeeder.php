<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'azeezmakhmudov@gmail.com'
        ],
        [
            'fullname' => 'Makhmudov Azizbek Qobiljon o`g`li',
            'password' => bcrypt('kung-fu-panda'),
            'remember_token' => Str::random(50)
        ]);
    }
}
