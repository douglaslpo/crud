<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtestadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atestados')->insert([
            'id_contrato' => 2,
            'id_unidade' => 1,
            'id_usuario' => 2,
            'acompanhante' => 'Pai do Cris',
            'obito' => 'Sim'        
        ]);
        factory(App\Models\Atestado::class, 10)->create();
    }
}
