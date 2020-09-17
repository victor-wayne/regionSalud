<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Calificacion extends Model
{
	protected $table = 'calificaciones';

	protected $guarded = ['id'];

	public function medico()
	{
		return $this->belongsTo('App\Medico');
	}	
}
