<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addIndex()
    {
        return view('form.adduser');
    }

    public function create()
    {
        $rules = array(
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            Session::flash('fail', 'Gagal menambahkan user');
            return redirect()->route('user.add.index');
        }

        $data = Input::all();

        if (User::where('email', $data['email'])->count() > 0) {
            Session::flash('fail', 'Gagal menamnahkan user.');
            return redirect()->route('user.add.index');
        }

        $user = new User();
        $user->name = $data['name'];
        $user->phone = $data['phone'];
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role_id = $data['role_id'];

        if ($user->save()) {
            Session::flash('success', 'User berhasil ditambahkan');
            return redirect()->route('user.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan user');
            return redirect()->route('user.add.index');
        }
    }

    public function index()
    {
        $users = User::get();
        return view('userlist', ['users' => $users]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.show');
    }

    public function showEditForm($id)
    {
        $user = User::find($id);
        return view('form.updateuser', ['user' => $user]);
    }

    public function update()
    {
        $rules = array(
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        $data = Input::all();
        if ($validator->fails()) {
            Session::flash('fail', 'Gagal mengupdate user');
            return redirect()->route('user.edit.show',['id'=>$data['id']]);
        }

        $user = User::find($data['id']);
//        dd($user);
        DB::table('users')->where('id' , $data['id'])->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
        return redirect()->route('user.edit.show', ['id' => $data['id']]);
//        if ($user->save()) {
//            Session::flash('success', 'Berhasil');
//            return redirect()->route('user.edit.show',['id'=>$data['id']]);
//        } else {
//            Session::flash('fail', 'Gagal  updateuser');
//            return redirect()->route('user.edit.show',['id'=>$data['id']]);
//        }
    }
}
