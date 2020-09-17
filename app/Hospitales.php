<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitales extends Model
{
      protected $table = 'hospitales';

       protected $fillable = ['name', 'img', 'slug', 'description', 'extract',  'telefono', 'telefono_sec', 'email', 'address',
        'address_sec', 'horario_atencion', 'ciudad', 'face', 'twi',  'insta','video', 'web'];

}
