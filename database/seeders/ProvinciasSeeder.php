<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include('utils/provincias.php');

        foreach ($provincias->provincias as $key ) {

            DB::table('provincias')->insert([
             'nombre' => $key->nombre
            ]);
        }
    }
}


