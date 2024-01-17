<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();

        \App\Models\User::factory()->create([
             'name' => 'Admin Admin',
             'email' => 'admin@admin.bo',
             'password' => Hash::make('73467157'),

        ]);

        \App\Models\User::factory()->create([
            'name' => 'Samuel Ocampos',
            'email' => 'samuel@admin.bo',
            'password' => Hash::make('67910101'),

       ]);
    }
}
