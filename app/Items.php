<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{

    protected $fillable = [
        'name',
        'user_id',
        'list_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function lists()
    {
    	return $this->belongsTo('App\Lists');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comments');
    }

}
