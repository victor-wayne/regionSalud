<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Medico;

class NutriologosController extends Controller
{
    public function index()
    {
        $medicos = Medico::All()
            ->where('area_id', '=', 34);
        //dd($medicos);
        //$data = [];
        //$data['medicos'] = $medicos;

        $areas = Area::All()
            -> where('id', '=', 32);

        return view('nutriologos.index', compact('medicos', 'areas'));
    }

    public function show($slug)
    {
        $medicos = Medico::where('slug', $slug)->first();
        $comments = $medicos->comments()->get();
        $califica = $medicos->calificacion()->get();
        //dd($medicos);
        return view('nutriologos.show', compact('medicos', 'comments', 'califica'));
    }
}

/*

insert into medicos (name, last_name, img, slug, description, extract, telefono, telefono_sec, email, address,
    address_sec, consultorio, ciudad, face, twi, insta, video, web, area_id) values ('Dr Vladimir',
    'Hernández Maldonado', 'nefr-vladimirhernandez.jpg', 'nefr-vladimirhernandez', 'Nefrólogos con Gran Vocación',
    '.',
     '4611743978', '4611743978',
    '.', 'Hospital Mac', 'Hospital Mac', 'Consul 709', 'Celaya, Gto', 'https://www.facebook.com/NefroCelaya',
    '#','#', 'swVxXI8eu4E', 'www.regionsalud.com.mx',21);

insert into laboratorios (name, img, slug, description, extract, telefono, telefono_sec, email, address,
    address_sec, horario_atencion, ciudad, face, twi, insta, video, web) values ('Diagnostica Moreno',
     'labo-diagnosticamoreno.jpg', 'labo-diagnosticamoreno', 'Laboratorio Médico', '.',
     '4616122109', '4616122109 * 4616123277 * 4616146989',
    'atencion.clientes@diagnosticamoreno.com.mx', 'Hospital Mac', 'Madero 109 Zona Centro * Guadalupe 215 Zona Centro *  Av. Ferrocarril Central 709 Local Exterior 8 (Hospital MAC) * Insurgentes 415 Centro Apaseo el Alto.',
    'Lun - Vie: 7:00AM - 7:00PM', 'Celaya, Gto * Apaseo el Alto', 'https://www.facebook.com/DiagnosticaMoreno/',
    '#','#', '8NeMbnaFeHk', 'www.diagnosticamoreno.com.mx');

insert into farmacia (name, img, slug, description, extract, telefono, telefono_sec, email, address,
    address_sec, horario_atencion, ciudad, face, twi, insta, video, web) values ('Farmacia Herrera',
     'farma-herrera.png', 'farma-herrera', 'Farmacia Herrera traadición que da confianza', 'Lunes y Jueves de Descuento * Sabados de Dermatologia',
     '4616122173', '4616122173',
    'contacto@farmaciaherrera.com.mx', 'Zaragoza #206', 'Zaragoza #206 * Bulevar Adolfo Lopez Mateos #802 Oriente',
    'Lun - Sab: 9:00AM - 8:30PM * Dom: 11:00AM - 2:00PM', 'Celaya, Gto', 'https://www.facebook.com/farmaherrera',
    '#','#', 'mQWyyQClMN4', 'www.farmaciaherrera.com.mx');

insert into hospitales (name, img, slug, description, extract, telefono, telefono_sec, email, address,
    address_sec, horario_atencion, ciudad, face, twi, insta, video, web) values ('Región Salud',
     'regionsalud.jpg', 'regionsalud', 'Nuestro objetivo es fomentar la salud preventiva con el apoyo de los profesionales afiliados y a su vez ustedes obtengan mas pacientes', '.',
     '4611451417', '4611451417',
    'contacto@regionsalud.com.mx', '.', '.',
    'Todos los Dias', 'Celaya, Gto', 'https://www.facebook.com/RegionSaludCelaya',
    '#','https://www.instagram.com/region_salud/?hl=es-la', 'GknldTamcTg', 'http://www.regionsalud.com.mx');


insert en producccion

insert into medicos (name, last_name, img, slug, description, extract, telefono, email, address, colonia,
   ciudad, face, twi, insta, video,  area_id) values ('Cuidarte Pro', 'Agencia de enfermeria', 'enfe-cuidartepro.jpg',
   'enfe-cuidartepro', 'Agencia de enfermeria ', 'Contamos con personal con gran experiencia en el cuidado del paciente /
Disponibilidad de diversos equipos para dar una mejor atención en las diferentes necesidades de los pacientes
Atención de calidad y trato digno ',
    '4611506703', '#', '#', '#',
     'Celaya, Gto', 'https://www.facebook.com/cuidartepro/ ', '#', '#' , '8NeMbnaFeHk', 17);
*/

