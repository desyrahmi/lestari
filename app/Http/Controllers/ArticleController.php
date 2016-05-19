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
            'content' => 'required',
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
        $article->content = $data['content'];
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
}
