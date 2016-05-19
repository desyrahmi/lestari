<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;

class EventController extends Controller
{
    public function addIndex(){
        return view('form.event');
    }

    public function create(){
//        dd(Auth::user()->id);
        $rules = array(
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan event');
            return redirect()->route('event.add.index');
        }

        $data = Input::all();
        /*
        if(Event::where('email', $data['email'])->count()>0){
            Session::flash('fail', 'Gagal menamnahkan event.');
            return redirect()->route('event.add.index');
        }*/

        $event = new Event();
        $event->title = $data['title'];
        $event->date = $data['date'];
        $event->description = $data['description'];
        $event->user_id = Auth::user()->id;

        if($event->save()){
            Session::flash('success', 'Event berhasil ditambahkan');
            return redirect()->route('event.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan event');
            return redirect()->route('event.add.index');
        }
    }

    public function index(){
        $events = Event::get();
        return view('eventlist',['events' => $events]);
    }

    public function delete($id){
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('event.show');
    }
}
