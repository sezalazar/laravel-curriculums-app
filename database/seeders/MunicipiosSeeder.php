<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include('utils/municipios.php');

        foreach ($municipios->municipios as $key ) {

            DB::table('localidades')->insert([
             'nombre' =>  $key->nombre,
             'provincia' => $key->provincia->nombre
            ]);
        }
    }
}
