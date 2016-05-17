<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['title','content'];

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    publid function comments(){
    	return $this->hasMany('App\Comment','article_id','id');
    }
    public function photos(){
    	return $this->belongsToMany('App\Photo','article_photo','article_id','photo_id');
    }
}