<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades')->insert([
            'id_contrato' => 3,
            'email' => 'fulano@gmail.com',
            'municipio' => 'Goiania',
            'estado'=> 'Goias',
            'tipo' => 'XML',
            'status' => 1
        ]);
        factory(App\Models\Unidade::class, 10)->create();
    }
}
