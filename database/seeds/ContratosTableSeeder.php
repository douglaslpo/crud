<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContratosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contratos')->insert([
            'cnpj' => '77042585000137',
            'razao_social' => 'Empresa numero um',
            'nome_fantasia'=> 'Empresa nome Fantasia 1',
            'email' => 'empresa1@exemplo.com',
            'status' => 1
        ]);
        DB::table('contratos')->insert([
            'cnpj' => '83836095000105',
            'razao_social' => 'Empresa numero dois',
            'nome_fantasia'=> 'Empresa nome Fantasia 2',
            'email' => 'empresa2@exemplo.com',
            'status' => 1
        ]);
        DB::table('contratos')->insert([
            'cnpj' => '29829902000117',
            'razao_social' => 'Empresa numero tres',
            'nome_fantasia'=> 'Empresa nome Fantasia 3',
            'email' => 'empresa3@exemplo.com',
            'status' => 0
        ]);
        factory(App\Models\Contrato::class, 50)->create();
    }
}
