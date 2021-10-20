<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arrayRegiones =[
          'Arica y Parinacota y Tarapaca',
          'Antofagasta',
          'Atacama y Coquimbo',
          'Valparaiso',
          'OHiggins',
          'Maule',
          'Ñuble, Biobio y La Araucania(Norte)',
          'La Araucania(Sur)',
          'Los Rios y Los Lagos(Norte)',
          'Los Lagos(Sur) y Aysen',
          'Magallanes',
          'Reg. Metropolintana de Santiago'
        ];


        foreach ($arrayRegiones as $key => $value) {
          $region = new Region();
          $region->nombre = $value;
          $region->save();
        }
    }
}
