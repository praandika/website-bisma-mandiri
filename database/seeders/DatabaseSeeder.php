<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Andika',
            'username' => 'andika',
            'email' => 'praandikayoga@gmail.com',
            'password' => Hash::make('andikacrm'),
            'access' => 'master',
        ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@bisma.com',
            'password' => Hash::make('admin*#'),
            'access' => 'admin',
        ]);
    }
}
