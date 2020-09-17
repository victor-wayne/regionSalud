<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Medico;

class MedicoTableSeeder extends Seeder
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
                'name' 			=> 'Dr. Esaú',
                'last_name' 	=> 'González García',
                'img' 		    => 'card-esaugonzalez.jpg',
                'slug' 			=> 'card-esaugonzalez',
                'description' 	=> 'Consejo Mexicano de Cardiología NO2749',
                'extract' 		=> 'Egresado de CMN Siglo XXI',
                'telefono' 		=> '4616147703',
                'telefono_sec' 	=> '4616147703 * 4425016331',
                'email' 		=> '.',
                'address' 		=> 'Hospital MAC',
                'address_sec' 	=> 'Hospital MAC',
                'consultorio' 	=> 'Consul #603',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/DrEsau',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'h9bECgIgGhQ',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dr. Carlos Eduardo',
                'last_name' 	=> 'Gómez Gaitán',
                'img' 		    => 'card-carlosgomez.jpg',
                'slug' 			=> 'card-carlosgomez',
                'description' 	=> 'Cardiología Clínica en el Hospital General de México',
                'extract' 		=> 'Alta Especialidad Medica en Ecocardiografía (ultrasonido del corazón) con reconocimiento universitario por la Universidad Nacional Autónoma de México (UNAM) * certificación vigente por el Consejo Mexicano de Cardiología',
                'telefono' 		=> '4616134364',
                'telefono_sec' 	=> '4616134364',
                'email' 		=> '.',
                'address' 		=> 'Sanatorio Celaya',
                'address_sec' 	=> 'Sanatorio Celaya (Benito Juarez 426) * Sanatorio Guadalupano (Guadalupe 205)',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/drcarlosgomezgaitan/',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => '8NeMbnaFeHk',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dr. Jorge Vladimir',
                'last_name' 	=> 'Covarrubias Ramírez',
                'img' 		    => 'cpla-jorgevladimir.jpg',
                'slug' 			=> 'cpla-jorgevladimir',
                'description' 	=> 'Estudió Medicina en la Universidad de Guanajuato',
                'extract' 		=> 'Estudió Cirugía General en la UNAM * Cirugía Plástica Reconstructiva por la UNAM * Cirugía de Mano y Nervio Periférico por la UNAM * Miembro de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva * Miembro de la Asociación Mexicana de Labio y Paladar Hendido.',
                'telefono' 		=> '4612161138',
                'telefono_sec' 	=> '4612161138',
                'email' 		=> '.',
                'address' 		=> 'Hospital MAC ',
                'address_sec' 	=> 'Hospital MAC',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => '#',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => '8NeMbnaFeHk',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 2,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dr. Moisés',
                'last_name' 	=> 'Hinojosa Bujaidar',
                'img' 		    => 'inte-moiseshinojosa.jpg',
                'slug' 			=> 'inte-moiseshinojosa',
                'description' 	=> 'Egresado de Medicina General de la Universidad Autónoma de Guadalajara',
                'extract' 		=> 'Especialidad en la Universidad de Guanajuato en el Centro Médico Nacional del Bajío IMSS 01 León',
                'telefono' 		=> '4616093374',
                'telefono_sec' 	=> '4616093374',
                'email' 		=> '.',
                'address' 		=> 'Hospital Santa Elena',
                'address_sec' 	=> 'Hospital Santa Elena',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => '#',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'WJXbRggwA-c',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 7,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dr. Bulmaro',
                'last_name' 	=> 'Morales Fuentes',
                'img' 		    => 'neur-bulmaromorales.jpg',
                'slug' 			=> 'neur-bulmaromorales',
                'description' 	=> 'Especialidad en Neurocirugía y Cirugía de la columna vertebral',
                'extract' 		=> 'Centro Médico Nacional del Noreste. Unidad de Alta Especialidad. MTY. NL / Universidad de Monterrey, 2017 ',
                'telefono' 		=> '.',
                'telefono_sec' 	=> '.',
                'email' 		=> '.',
                'address' 		=> 'Ferrocarril Central 709',
                'address_sec' 	=> 'Ferrocarril Central 709 (Los Laureles 1a Sección) Piso 4, Consultorio 401 * Camino a Alcocer 12, Hospital MAC San Miguel de Allende',
                'consultorio' 	=> 'Consul #401 Celaya',
                'ciudad' 		=> 'Celaya, Gto * San Miguel de Allende',
                'face'          => 'https://www.facebook.com/Dr.BulmaroMorales/',
                'twi'           => '#',
                'insta'         => 'https://www.instagram.com/neurobajio/?hl=es-la',
                'video'         => 'maod3-BeEtA',
                'web'           => 'http://www.neurobajio.com/',
                'area_id' 	    => 8,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dra. Lesly',
                'last_name' 	=> 'Carrillo Galván',
                'img' 		    => 'ofta-leslycarrillo.jpg',
                'slug' 			=> 'ofta-leslycarrillo',
                'description' 	=> 'Médico cirujano, Universidad Autónoma de Guadalajara, 2013',
                'extract' 		=> 'Certificado por Consejo Mexicano de Oftalmología, CMO, 2017',
                'telefono' 		=> '4612801370',
                'telefono_sec' 	=> '4612801370',
                'email' 		=> '.',
                'address' 		=> 'Hospital MAC',
                'address_sec' 	=> 'Hospital MAC',
                'consultorio' 	=> 'Consul #509',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/oftalmocelaya/',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'hGrj6-LS7lw',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 10,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dra. Beatríz',
                'last_name' 	=> 'Zúñiga Manríquez',
                'img' 		    => 'pedi-beatrizzuniga.jpg',
                'slug' 			=> 'pedi-beatrizzuniga',
                'description' 	=> 'Medicina En la Universidad de Guanajuato',
                'extract' 		=> 'Estudió Especialidad en Hospital Infantil de México Federico Gómez',
                'telefono' 		=> '4612213464',
                'telefono_sec' 	=> '4612213464',
                'email' 		=> '.',
                'address' 		=> 'Col. Alameda',
                'address_sec' 	=> 'Guillermo Prieto 404, Col. Alameda',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => '#',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'XvcQUWi9dGs',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 12,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dra. María Fernanda',
                'last_name' 	=> 'Almanza Rodríguez',
                'img' 		    => 'psiq-mariaalmanza.jpg',
                'slug' 			=> 'psiq-mariaalmanza',
                'description' 	=> 'Egresada del Instituto Nacional de Psiquiatría',
                'extract' 		=> 'Médico Cirujano especialista en Psiquiatría * Alta Especialidad en Trastornos Psicóticos por la UNAM',
                'telefono' 		=> '4611966756',
                'telefono_sec' 	=> '4611966756',
                'email' 		=> '.',
                'address' 		=> 'Hospital MAC',
                'address_sec' 	=> 'Hospital MAC',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/Dra.MariaFernandaAlmanza',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'qudrzyfc1GY',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 13,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],



            [
                'name' 			=> 'Dr. Julio A.',
                'last_name' 	=> 'Escalante G.',
                'img' 		    => 'angi-julioescalante.jpg',
                'slug' 			=> 'angi-julioescalante',
                'description' 	=> 'Estudió medicina en Universidad de Guanajuato',
                'extract' 		=> 'Universidad Latina de México * Especialidad en Angiología en UNAM Hospital Siglo XXI * Múltiples publicaciones en revistas internacionales',
                'telefono' 		=> '4616175920',
                'telefono_sec' 	=> '4616175920',
                'email' 		=> '.',
                'address' 		=> 'Hospital San José',
                'address_sec' 	=> 'Hospital San José',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => '#',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'X4mnTaJRRmk',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 17,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'DR. Vladimir',
                'last_name' 	=> 'Hernández Maldonado',
                'img' 		    => 'nefr-vladimirhernandez.jpg',
                'slug' 			=> 'nefr-vladimirhernandez',
                'description' 	=> 'Nefrólogos con gran vocación',
                'extract' 		=> '.',
                'telefono' 		=> '4611743978',
                'telefono_sec' 	=> '4611743978',
                'email' 		=> '.',
                'address' 		=> 'Hospital MAC',
                'address_sec' 	=> 'Hospital MAC',
                'consultorio' 	=> 'Consul #709',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/NefroCelaya',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'swVxXI8eu4E',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 21,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dr. Ernesto A.',
                'last_name' 	=> 'Aboytes Velázquez',
                'img' 		    => 'urol-ernestoaboytes.jpg',
                'slug' 			=> 'urol-ernestoaboytes',
                'description' 	=> 'Egresado de la escuela médico militar',
                'extract' 		=> '.',
                'telefono' 		=> '4611577585',
                'telefono_sec' 	=> '4611577585',
                'email' 		=> '.',
                'address' 		=> 'Hospital San José',
                'address_sec' 	=> 'Hospital San José',
                'consultorio' 	=> 'Consul #714',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/Integrauro/?ti=as',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'y6prS56uOw8',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 24,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Dra. Jessica',
                'last_name' 	=> 'González Domínguez',
                'img' 		    => 'cide-jessicagonzalez.jpg',
                'slug' 			=> 'cide-jessicagonzalez',
                'description' 	=> 'Cirujano Dentista egresada de Universidad Latinoamericana',
                'extract' 		=> 'Estudió Odontología en Universidad Latinoamericana Campus Cuernavaca',
                'telefono' 		=> '4611409231',
                'telefono_sec' 	=> '4611409231',
                'email' 		=> '.',
                'address' 		=> '5 de Mayo #234',
                'address_sec' 	=> '5 de Mayo #234',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => '#',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'XnfMsh9Oki4',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 25,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Mtro. Rodrigo',
                'last_name' 	=> 'González Domínguez',
                'img' 		    => 'psic-rodrigonavarrete.jpg',
                'slug' 			=> 'psic-rodrigonavarrete',
                'description' 	=> 'Psicólogo egresado de la Universidad de Ciencias y Artes de Chiapas (UNICACH)',
                'extract' 		=> 'Maestro en Sexología educativa, sensibilización y manejo de grupos.',
                'telefono' 		=> '4611806235',
                'telefono_sec' 	=> '4611806235 * 4616090864',
                'email' 		=> '.',
                'address' 		=> 'Benito Juárez #420',
                'address_sec' 	=> 'Benito Juárez #420',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/psintegralcelaya',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'QLW77uMPLcw',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 31,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'NURSECARE',
                'last_name' 	=> '.',
                'img' 		    => 'enfe-nursecare.jpg',
                'slug' 			=> 'enfe-nursecare',
                'description' 	=> 'Servicio de enfermerìa',
                'extract' 		=> 'El mejor cuidado de tu paciente en casa, conoce nuestro cálido servicio',
                'telefono' 		=> '4612892699',
                'telefono_sec' 	=> '4612892699',
                'email' 		=> '.',
                'address' 		=> '.',
                'address_sec' 	=> '.',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/Nursecare-Celaya-449822308929319/',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'qf6N-kNAIkA',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 33,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Cuidarte Pro',
                'last_name' 	=> 'Agencia de enfermeria',
                'img' 		    => 'enfe-cuidartepro.jpg',
                'slug' 			=> 'enfe-cuidartepro',
                'description' 	=> 'Agencia de enfermeria',
                'extract' 		=> 'Contamos con personal con gran experiencia en el cuidado del paciente * Atención de calidad y trato digno',
                'telefono' 		=> '4611506703',
                'telefono_sec' 	=> '4611506703',
                'email' 		=> '.',
                'address' 		=> '.',
                'address_sec' 	=> '.',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/cuidartepro/ ',
                'twi'           => '#',
                'insta'         => '#',
                'video'         => 'cu9wUW73qKU',
                'web'           => 'https://cuidartepro.com/',
                'area_id' 	    => 33,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],

            [
                'name' 			=> 'Región Salud',
                'last_name' 	=> '.',
                'img' 		    => 'regionsalud.jpg',
                'slug' 			=> 'regionsalud',
                'description' 	=> 'Nuestro objetivo es fomentar la salud preventiva con el apoyo de los profesionales afiliados y a su vez ustedes obtengan mas pacientes',
                'extract' 		=> '.',
                'telefono' 		=> '4611451417',
                'telefono_sec' 	=> '4611451417',
                'email' 		=> 'contacto@regionsalud.com.mx',
                'address' 		=> '.',
                'address_sec' 	=> '.',
                'consultorio' 	=> '.',
                'ciudad' 		=> 'Celaya, Gto',
                'face'          => 'https://www.facebook.com/RegionSaludCelaya',
                'twi'           => '#',
                'insta'         => 'https://www.instagram.com/region_salud/?hl=es-la',
                'video'         => 'GknldTamcTg',
                'web'           => 'http://www.regionsalud.com.mx',
                'area_id' 	    => 34,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,



            ],



        );




        Medico::insert($data);
    }
}
