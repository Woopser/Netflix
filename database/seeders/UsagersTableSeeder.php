<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UsagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usagers')->insert([
            [
                'email' => 'Jean@Jean.com',
                'password' => Hash::make('Jean'),
                'identification' => 'Admin',
            ],
            [
                'email' => 'Bob@Bob.com',
                'password' => Hash::make('bob'),
                'identification' => 'simple',
            ]
        ]);
    }
}
