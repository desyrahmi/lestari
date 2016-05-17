<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['type'];

    public function users(){
    	return $this->hasMany('App\User','role_id','id');
    }
}