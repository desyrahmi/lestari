<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['title','date','description'];

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function photos(){
    	return $this->belongsToMany('App\Photo','event_photo','event_id','photo_id');
    }
}