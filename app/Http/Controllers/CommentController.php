<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Hash;


class CommentController extends Controller
{
    public function addIndex(){
        $articles = Article::get();
        return view('form.comment',['articles'=>$articles]);
    }

    public function create(){
//        dd(Auth::user()->id);
        $rules = array(
            'comment' => 'required',
            'article_id' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            Session::flash('fail','Gagal menambahkan article');
            return redirect()->route('comment.add.index');
        }

        $data = Input::all();
        /*
        if(Article::where('email', $data['email'])->count()>0){
            Session::flash('fail', 'Gagal menamnahkan article.');
            return redirect()->route('article.add.index');
        }*/

        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $data['article_id'];

        if($comment->save()){
            Session::flash('success', 'Comment berhasil ditambahkan');
            return redirect()->route('comment.add.index');
        } else {
            Session::flash('fail', 'Gagal menambahkan article');
            return redirect()->route('comment.add.index');
        }
    }

    public function index(){
        $comments = Comment::get();
        return view('commentlist',['comments' => $comments]);
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('comment.show');
    }
}
