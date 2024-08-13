<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'John',
                'lastname' => 'Doe',
                'date_naissance' => '1990-01-01',
                'adresse' => '123 Main St',
                'telephone' => '1234567890',
                'code_postal' => '12345',
                'email' => 'john.doe@example.com',
                'username' => 'johndoe',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Jane',
                'lastname' => 'Smith',
                'date_naissance' => '1985-05-15',
                'adresse' => '456 Elm St',
                'telephone' => '0987654321',
                'code_postal' => '54321',
                'email' => 'jane.smith@example.com',
                'username' => 'janesmith',
                'password' => Hash::make('password123'),
                'role' => 'client',
            ],
            [
                'name' => 'Alice',
                'lastname' => 'Johnson',
                'date_naissance' => '1992-07-22',
                'adresse' => '789 Oak St',
                'telephone' => '1122334455',
                'code_postal' => '67890',
                'email' => 'alice.johnson@example.com',
                'username' => 'alicejohnson',
                'password' => Hash::make('password123'),
                'role' => 'client',
            ],
        ]);
    }
}
