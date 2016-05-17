<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = 'donates';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['total'];

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function project(){
    	return $this->belongsTo('App\Project','project_id','id');
    }
}