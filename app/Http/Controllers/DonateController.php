<?php

namespace App\Http\Controllers;

use App\Project;
use App\Donate;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;


class DonateController extends Controller
{
    public function addIndex(){
        $projects = Project::get();
        return view('form.donate',['projects'=>$projects]);
    }

    public function create(){
//        dd(Auth::user()->id);
        $rules = array(
            'total' => 'required',
            'project_id' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan donate');
            return redirect()->route('donate.add.index');
        }

        $data = Input::all();
        /*
        if(Donate::where('email', $data['email'])->count()>0){
            Session::flash('fail', 'Gagal menamnahkan donate.');
            return redirect()->route('donate.add.index');
        }*/

        $donate = new Donate();
        $donate->total = $data['total'];
        $donate->user_id = Auth::user()->id;
        $donate->project_id = $data['project_id'];

        if($donate->save()){
            Session::flash('success', 'Donate berhasil ditambahkan');
            return redirect()->route('donate.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan donate');
            return redirect()->route('donate.add.index');
        }
    }

    public function index(){
        $donates = Donate::get();
        return view('donatelist',['donates' => $donates]);
    }

    public function delete($id){
        $donate = Donate::find($id);
        $donate->delete();

        return redirect()->route('donate.show');
    }
}
