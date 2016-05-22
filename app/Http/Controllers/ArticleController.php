<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;

class ArticleController extends Controller
{
    public function addIndex(){
        return view('form.article');
    }

    public function create(){
//        dd(Auth::user()->id);
        $rules = array(
            'title' => 'required',
            'post' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan article');
            return redirect()->route('article.add.index');
        }

        $data = Input::all();
        /*
        if(Article::where('email', $data['email'])->count()>0){
            Session::flash('fail', 'Gagal menamnahkan article.');
            return redirect()->route('article.add.index');
        }*/

        $article = new Article();
        $article->title = $data['title'];
        $article->post = $data['post'];
        $article->user_id = Auth::user()->id;

        if($article->save()){
            Session::flash('success', 'Article berhasil ditambahkan');
            return redirect()->route('article.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan article');
            return redirect()->route('article.add.index');
        }
    }

    public function index(){
        $articles = Article::get();
        return view('articlelist',['articles' => $articles]);
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('article.show');
    }

    public function showEditForm($id)
    {
        $article = Article::find($id);
        return view('form.updatearticle', ['article' => $article]);
    }

    public function update()
    {
        $rules = array(
            'title' => 'required',
            'post' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        $data = Input::all();
        if ($validator->fails()) {
            Session::flash('fail', 'Gagal mengupdate article');
            return redirect()->route('article.edit.show',['id'=>$data['id']]);
        }

        $article = Article::find($data['id']);
        DB::table('articles')->where('id' , $data['id'])->update([
            'title' => $data['title'],
            'post' => $data['post'],
        ]);
        return redirect()->route('article.edit.show', ['id' => $data['id']]);
    }
}
