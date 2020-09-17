<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Farmacia;

class FarmaciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(

            [
                'name' 			=> 'Farmacia Herrera',
                'img' 		    => 'http://5x3soluciones.com/wp-content/uploads/2016/10/business_logo-FONDO-BLANCO-200X200.png',
                'slug' 			=> 'far-herrera',
                'description' 	=> 'Farmacia Herrera traadición que da confianza ',
                'extract' 		=> 'Lunes y Jueves de descuento',
                'telefono' 		=> '(461) 6122173',
                'telefono_sec' 	=> '(461) 3124967',
                'email' 		=> 'direccion@farmaciaherrera.com.mx',
                'address' 		=> 'Ignacio Zaragoza #206',
                'address_sec' 	=> 'Ignacio Zaragoza #206',
                'colonia' 		=> ' Centro ',
                'ciudad' 		=> ' Celaya, Gto',
                'face'          => 'https://www.facebook.com/farmaherrera',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'mQWyyQClMN4',
                'web'           => 'http://www.regionsalud.com.mx',
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ]
        );

        Farmacia::insert($data);
    }

}
