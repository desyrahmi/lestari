<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;

class ProjectController extends Controller
{
    public function addIndex(){
        return view('form.addproject');
    }

    public function create(){
        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'total' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan project');
            return redirect()->route('project.add.index');
        }

        $data = Input::all();
        /*
        if(Project::where('email', $data['email'])->count()>0){
            Session::flash('fail', 'Gagal menamnahkan project.');
            return redirect()->route('project.add.index');
        }*/

        $project = new Project();
        $project->title = $data['title'];
        $project->description = $data['description'];
        $project->total = $data['total'];

        if($project->save()){
            Session::flash('success', 'Project berhasil ditambahkan');
            return redirect()->route('project.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan project');
            return redirect()->route('project.add.index');
        }
    }

    public function index(){
        $projects = Project::get();
        return view('projectlist',['projects' => $projects]);
    }

    public function delete($id){
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('project.show');
    }

    public function showEditForm($id)
    {
        $project = Project::find($id);
        return view('form.updateproject', ['project' => $project]);
    }

    public function update()
    {
        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'total' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        $data = Input::all();
        if ($validator->fails()) {
            Session::flash('fail', 'Gagal mengupdate project');
            return redirect()->route('project.edit.show',['id'=>$data['id']]);
        }

        $project = Project::find($data['id']);
        DB::table('projects')->where('id' , $data['id'])->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'total' => $data['total'],
        ]);
        return redirect()->route('project.edit.show', ['id' => $data['id']]);
    }
}
