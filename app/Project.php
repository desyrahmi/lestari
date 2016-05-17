<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['title','description','total'];

    public function donates(){
    	return $this->hasMany('App\Donate','project_id','id');
    }
    public function photos(){
    	return $this->belongsToMany('App\Photo','photo_project','project_id','photo_id');
    }
}