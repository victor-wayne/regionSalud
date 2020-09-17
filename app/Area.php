<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';

    protected $fillable = ['area',  'description', 'slug', 'color'];

    public $timestamps = false;

    public function area()
    {
        return $this->hasMany('App\Area');
    }

}
