<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';

    protected $fillable = ['name', 'last_name', 'img', 'slug', 'description', 'extract',  'telefono', 'email', 'address',
        'colonia', 'ciudad', 'face', 'twi',  'insta','video', 'area_id'];

    //Relation with Area
    public function category()
    {
        return $this->belongsTo('App\Area');
    }

    public function comments()
    {
        //post_id = id medico
        return $this->hasMany('App\Comment', 'post_id');
    }

    public function calificacion()
    {
        return $this->hasMany('App\Calificacion', 'post_id');
    }
}
