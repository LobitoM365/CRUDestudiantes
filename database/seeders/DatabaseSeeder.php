<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = new User;
        $user->name = "Juan";
        $user->email = "juan@gmail.com";
        $user->identificacion = "4444";
        $user->apellido = "Almario";
        $user->rol = "administrador";
        $user->password = "4444";
        $user->save();
    }
}
