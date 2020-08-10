<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome' => 'El Chapo',
            'cpf' => '776.370.170-60',
            'id_contrato' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'nome' => 'Al Capone',
            'cpf' => '571.878.510-49',
            'id_contrato' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'nome' => 'Dom Corleone',
            'cpf' => '282.114.070-35',
            'id_contrato' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'nome' => 'Eduardo Bolsonaro',
            'cpf' => '997.535.900-08',
            'id_contrato' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'nome' => 'Pablo Escobar',
            'cpf' => '323.450.140-83',
            'id_contrato' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
