<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'hafiz',
            'email' => 'picman.h@gmail.com',
            'password' => Hash::make('sannur2h'),
            'roles' => 'ADMIN'
        ]);
    }
}
