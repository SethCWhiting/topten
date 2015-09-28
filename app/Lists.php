<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
	protected $fillable = [
		'title',
        'user_id'
	];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function items()
    {
    	return $this->hasMany('App\Items');
    }

}
