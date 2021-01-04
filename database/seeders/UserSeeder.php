<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->username = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin123');
        $user->save();
    }
}
