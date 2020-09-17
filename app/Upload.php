<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
    	'filename',
        'imagen'
    ];

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
