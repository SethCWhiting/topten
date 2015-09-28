<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $fillable = [
		'body'
	];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function items()
    {
    	return $this->belongsTo('App\Items');
    }

}
