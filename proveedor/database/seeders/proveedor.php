<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class proveedor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedor')->insert([
            [
                'nombre'=> 'Mario',
                'tipo'=> 'Telefono'
              
                
            ],
            [
                'nombre'=> 'Juarez',
                'tipo'=> 'Radio'  
            ]
        ]);
    }
}
