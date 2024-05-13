<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Warga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Warga::factory(10)->create();
        // User::factory(10)->create();


        $user = \App\Models\User::factory()->create([
            'username' => 'Uzi',
            'id_rt' => '1',
            'nik' => '1234567890123456',
            'password' => Hash::make('password'),
            'role' => '1',
        ]);



        
    }
}
