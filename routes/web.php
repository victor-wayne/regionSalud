<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as' =>'home',
    'uses' => 'RegionController@index'
]);

Route::get('contact-us', ['as' =>'contactus-show', 'uses' => 'ContactUSController@contactUS']);

Route::post('contact-us',['as'=>'contactus.store', 'uses'=>'ContactUSController@contactUSPost'] );



Route::post('comment', 'CommentsController@newComment');

Route::post('califica', 'CalificaController@califica');


Route::get('medic/{slug}', [
    'as' => 'medic-detail',
    'uses' => 'PediatrasController@show'
]);

Route::get('aboutus', [
    'as' => 'quines-somos',
    'uses' => 'RegionController@show'
]);

Route::get('subeArticulo', [
    'as' => 'subearticulo-show',
    'uses' => 'ArticulosController@sube'
]);

Route::post('articulo/guarda', 'ArticulosController@store')->name('articulo.guarda');

Route::get('podcast-region-salud', [
    'as' => 'podcast',
    'uses' => 'RegionController@podcast'
]);

/* Rutas para Menu Medicos */

Route::get('cirujanos', [
    'as' => 'cirujanos-show',
    'uses' => 'CirujanosController@index'
]);

Route::get('dermatologia', [
    'as' => 'dermatologia-show',
    'uses' => 'DermatologiaController@index'
]);

Route::get('endocrinologos', [
    'as' => 'endocrinologos-show',
    'uses' => 'EndocrinologosController@index'
]);

Route::get('gastroenterologos', [
    'as' => 'gastroenterologos-show',
    'uses' => 'GastroenterologosController@index'
]);

Route::get('ginecologos', [
    'as' => 'ginecologos-show',
    'uses' => 'GinecologosController@index'
]);

Route::get('internistas', [
    'as' => 'internistas-show',
    'uses' => 'InternistasController@index'
]);

Route::get('neurocirujanos', [
    'as' => 'neurocirujanos-show',
    'uses' => 'NeurocirujanosController@index'
]);

Route::get('neurologos', [
    'as' => 'neurologos-show',
    'uses' => 'NeurologosController@index'
]);

Route::get('oftalmologos', [
    'as' => 'oftalmologos-show',
    'uses' => 'OftalmologosController@index'
]);

Route::get('otorrino', [
    'as' => 'otorrinos-show',
    'uses' => 'OtorrinoController@index'
]);

Route::get('pediatras', [
    'as' => 'pediatras-show',
    'uses' => 'PediatrasController@index'
]);

Route::get('psiquiatras', [
    'as' => 'psiquiatras-show',
    'uses' => 'PsiquiatrasController@index'
]);

Route::get('reumatologos', [
    'as' => 'reumatologos-show',
    'uses' => 'ReumatologosController@index'
]);

Route::get('traumatologos', [
    'as' => 'traumatologos-show',
    'uses' => 'TraumatologosController@index'
]);

/* Rutas de cardiologos */

Route::get('cardiologos', [
    'as' => 'cardiologos-show',
    'uses' => 'CardiologosController@index'
]);

Route::get('cardiologo-intervencionista', [
    'as' => 'intervencionista-show',
    'uses' => 'CardiologosController@intervencionista'
]);

Route::get('cardiologo-ecocardiografia', [
    'as' => 'ecocardiografia-show',
    'uses' => 'CardiologosController@ecocardiografia'
]);


/* Rutas de Dentistas  */

Route::get('cdentista', [
    'as' => 'cdentista-show',
    'uses' => 'CdentistaController@index'
]);

Route::get('endodoncistas', [
    'as' => 'endodoncistas-show',
    'uses' => 'EndodoncistasController@index'
]);

Route::get('implantologia', [
    'as' => 'implantologia-show',
    'uses' => 'ImplantologiaController@index'
]);

Route::get('odontopediatras', [
    'as' => 'odontopediatras-show',
    'uses' => 'OdontopediatrasController@index'
]);

Route::get('ortodoncistas', [
    'as' => 'ortodoncistas-show',
    'uses' => 'OrtodoncistasController@index'
]);

Route::get('periodoncistas', [
    'as' => 'periodoncistas-show',
    'uses' => 'PeriodoncistasController@index'
]);

Route::get('dentistas', [
    'as' => 'dentistas-show',
    'uses' => 'DentistasController@index'
]);


/* Rutas para Menus individuales */


Route::get('psicologos', [
    'as' => 'psicologos-show',
    'uses' => 'PsicologosController@index'
]);

Route::get('nutriologos', [
    'as' => 'nutriologos-show',
    'uses' => 'NutriologosController@index'
]);

Route::get('enfermeria', [
    'as' => 'enfermeria-show',
    'uses' => 'EnfermeriaController@index'
]);


Route::get('articles', [
    'as' => 'articulos-show',
    'uses' => 'ArticulosController@index'
]);

Route::get('entrevistas', [
    'as' => 'entrevistas-show',
    'uses' => 'EntrevistasController@index'
]);

Route::get('laboratorios', [
    'as' => 'laboratorios-show',
    'uses' => 'LaboratoriosController@index'
]);

Route::get('laboratorios/{slug}', [
    'as' => 'laboratorio-detail',
    'uses' => 'LaboratoriosController@show'
]);

Route::get('hospitales', [
    'as' => 'hospitales-show',
    'uses' => 'HospitalesController@index'
]);

Route::get('hospitales/{slug}', [
    'as' => 'hospital-detail',
    'uses' => 'HospitalesController@show'
]);

Route::get('farmacias', [
    'as' => 'farmacias-show',
    'uses' => 'FarmaciasController@index'
]);

Route::get('farmacias/{slug}', [
    'as' => 'farma-detail',
    'uses' => 'FarmaciasController@show'
]);


/* Rutas para Menu Otros */

Route::get('anestesiologos', [
    'as' => 'anesteciologos-show',
    'uses' => 'AnestesiologosController@index'
]);

Route::get('angiologos', [
    'as' => 'angiologos-show',
    'uses' => 'AngiologoController@index'
]);

Route::get('genetistas', [
    'as' => 'genetistas-show',
    'uses' => 'GenetistaController@index'
]);

Route::get('geriatras', [
    'as' => 'geriatras-show',
    'uses' => 'GeriatrasController@index'
]);

Route::get('med-general', [
    'as' => 'medgeneral-show',
    'uses' => 'MedgeneralController@index'
]);

Route::get('nefrologo', [
    'as' => 'nefrologos-show',
    'uses' => 'NefrologoController@index'
]);

Route::get('neumologos', [
    'as' => 'neumologos-show',
    'uses' => 'NeumologosController@index'
]);

Route::get('rehabilitador', [
    'as' => 'rehabilitador-show',
    'uses' => 'RehabilitologosController@index'
]);

Route::get('urologos', [
    'as' => 'urologos-show',
    'uses' => 'UrologosController@index'
]);














