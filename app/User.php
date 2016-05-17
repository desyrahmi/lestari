<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name','phone','address','email','password'];

    public function role(){
    	return $this->belongsTo('App\Role','role_id','id');
    }

    public function articles(){
        return $this->hasMany('App\Artcile','user_id','id');
    }
    public function donates(){
    	return $this->hasMany('App\Donate','user_id','id');
    }
    public function events(){
        return $this->hasMany('App\Event','user_id','id');
    }
    public function comments(){
    	return $this->hasMany('App\Comment','user_id','id');
    }


    public function hasRole($roles){
        $this->have_role = $this->getUserRole();

        if (is_array($roles)){
            foreach ($roles as $need_role){
                if ($this->checkIfUserHasRole($need_role)){
                    return true;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    private function getUserRole(){
        return $this->role()->getResults();
    }

    private function checkIfUserHasRole($need_role){
        return (strtolower($need_role) == strtolower($this->have_role->type)) ? true : false;
    }
}
