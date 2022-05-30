<?php

namespace Database\Seeders;

use App\Models\User;
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

        $admin = User::query()->create([
            'username' => "admin",
            'phone' => "09010105397",
            'email' => "clinic.admin@info.com",
            'password' => Hash::make('password'),
            'is_superuser' => 1
        ]);
    }
}
