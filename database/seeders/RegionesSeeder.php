<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $arrayRegiones = [
          [
            'nombre'=>'Arica y Parinacota y Tarapaca'
          ],
          [
            'nombre'=>'Antofagasta'
          ],
          [
            'nombre'=>'Atacama y Coquimbo'
          ],
          [
            'nombre'=>'Valparaiso'
          ],
          [
            'nombre'=>'OHiggins'
          ],
          [
            'nombre'=>'Maule'
          ],
          [
            'nombre'=>'Ñuble, Biobio y La Araucania(Norte)'
          ],
          [
            'nombre'=>'La Araucania(Sur)'
          ],
          [
            'nombre'=>'Los Rios y Los Lagos(Norte)'
          ],
          [
            'nombre'=>'Los Lagos(Sur) y Aysen'
          ],
          [
            'nombre'=>'Magallanes'
          ],
          [
            'nombre'=>'Reg. Metropolintana de Santiago'
          ],
        ];
        foreach ($arrayRegiones as $key => $value) {
          $region = new Region();
          $region->nombre = $value['nombre'];
          $region->save();
        }
    }
}
