<?php

class UsersTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com'
        ]);
    }
}