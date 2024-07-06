<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\tiporol;
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
        // tipo de usuarios
        tiporol::create(['tipo' => 'ejecutivo']);
        tiporol::create(['tipo' => 'admin']);
        tiporol::create(['tipo' => 'cliente']);

        // usuarios
        User::create([
            'name' => 'ejecutivo1',
            'email' => 'Ejecutivo123@email.com',
            'tipo_rol' => 1,
            'password' => Hash::make('ejecutivo123'),
        ]);
        User::create([
            'name' => 'admin1',
            'email' => 'Admin123@email.com',
            'tipo_rol' => 2,
            'password' => Hash::make('admin123'),
        ]);


    }
}
