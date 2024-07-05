<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['correo' => 'admin1@autoscosmo.cl','contraseña' => Hash::make('1111'),'nombre' => 'Cosmo','id_perfil' => 1],
            ['correo' => 'ejec1@autoscosmo.cl','contraseña' => Hash::make('2222'),'nombre' => 'Wanda','id_perfil' => 2],
        
        ]);
    }
}
