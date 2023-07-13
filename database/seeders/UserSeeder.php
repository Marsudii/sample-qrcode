<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'id_company' => 1,
            'name' => 'Admin Surya Sains',
            'role' => 'Admin',
            'email' => 'admin@admin.io',
            'password' => Hash::make('rootroot'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id_company' => 1,
            'name' => 'User Surya Sains',
            'role' => 'Pengguna',
            'email' => 'user@user.io',
            'password' => Hash::make('rootroot'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
