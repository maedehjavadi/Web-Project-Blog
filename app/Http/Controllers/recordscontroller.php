<?php

namespace App\Http\Controllers;

use \App\Post;
use \App\User;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
//sakhte safhe ijade khtere
    public function create()
    {
        return view ('posts.addblog');
    }
//sabte khatere
    public function store()
    {
        //dd(request()->all());
        $data = request()->validate([
            'title' => 'required',
            'text' =>  'required',
            ]);
           //bara inke kasi k login shode btoone amale post ro anjam bede
        auth()->user()->posts()->create($data);
        return redirect('/home/'.auth()->user()->id);
    }

//bara dokme namayeshe khatere
    public function show(Post $post) {
        //dd($post);
       return view('posts.showblog', compact('post'));
    }

//bara edit va update khatere    
    public function edit(Post $post){
        
        $this->authorize('update' , $post);
        return view('posts.editblog', compact('post'));
    }

    public function update(Post $post){
        $this->authorize('update' , $post);
        $data = request()->validate([
            'title' => 'required',
            'text' =>  'required',
            ]);
        //dd($data);
        
        $post->update($data);
        return redirect("/p/{$post->id}");

    }

    //hazfe post
    public function destroy($id){
        //dd($id);
        
        $post= Post::findOrFail($id);
        $post->delete();
        return redirect('/home/'.auth()->user()->id);
    }

    

}
