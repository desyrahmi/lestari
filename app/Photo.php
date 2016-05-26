<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name','extension'];

    public function projects(){
    	return $this->belongsToMany('App\Project','photo_project','photo_id','project_id');
    }
    public function articles(){
    	return $this->belongsToMany('App\Article','article_photo','photo_id','article_id');
    }
    public function events(){
    	return $this->belongsToMany('App\Event','event_photo','photo_id','event_id');
    }
}