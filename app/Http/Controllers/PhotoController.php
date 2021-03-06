<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;
use File;
use Response;

class PhotoController extends Controller
{
    public function addIndex(){
        return view('form.photo');
    }

    public function create(){
//        dd(Auth::user()->id);
        $rules = array(
            'name' => 'required',
            'photo' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan photo');
            return redirect()->route('photo.add.index');
        }

        $data = Input::all();
        /*
        if(Photo::where('email', $data['email'])->count()>0){
            Session::flash('fail', 'Gagal menamnahkan photo.');
            return redirect()->route('photo.add.index');
        }*/
        $file = Input::file('photo');
        $photo = new Photo();
        $photo->name = $data['name'];
        $photo->extension = $file->getClientOriginalExtension();
        $photo->save();
        $file_name = (string)$photo->id.".".$file->getClientOriginalExtension();

        $destination_path = storage_path().'/foto';
//        $photo->update(['name' => $file_name]);
        // dd($destination_path);
        if(!$file->move($destination_path, $file_name)){
            Session::flash('fail', 'Gagal mengupload logo');
            $photo->delete();
            return redirect()->back()->withInput(Input::all());
        }
        Session::flash('success', 'Maskapai berhasil ditambahkan');
        return redirect()->route('photo.show');

    }

    public function index(){
        $photos = Photo::get();
        return view('photolist',['photos' => $photos]);
    }

    public function delete($id){
        $photo = Photo::find($id);
        $photo->delete();

        return redirect()->route('photo.show');
    }

    public function getPhoto($fileName) {
        $path = storage_path() .'/foto'. '/' . $fileName;
        if(!File::exists($path)) abort(404);
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
