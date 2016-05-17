<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use Auth;
use Validator;

class AuthController extends Controller
{
    public function index() {
    	return view('form.login');
    }

    public function doLogin(Request $request) {
    	$rules = array(
    		'email' => 'required',
    		'password' => 'required'
    	);

    	$validator = Validator::make(Input::all(), $rules);
    	if($validator->fails()){
    		echo 'gagal lewat validator';
    		return;
    		return view('login')
    			->withErrors($validator)
    			->withInput(Input::except('password'));
    	} else{
    		$userdata = array(
    			'email' => Input::get('email'),
    			'password' => Input::get('password')
    		);

    		if(Auth::attempt(array('email' => $userdata['email'], 'password' => $userdata['password']))){
    			echo 'berhasil login';
    			return;
   			return redirect()->route('admin.index');
    		} else{
    			echo 'gagal login';
    			return;
    			return view('login')
    				->withErrors(['Email atau Password salah'])
    				->withInput(Input::except('password'));
    		}
    	}
    }

    public function doLogout(){
    	Auth::logout();
    	return redirect()->route('auth.index');
    }
}
