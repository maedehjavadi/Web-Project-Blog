<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class recordscontroller extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }

    public function create()
    {
        return view ('posts.addblog');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'text' =>  'required',
            ]);
           //bara inke kasi k login shode btoone amale post ro anjam bede
        auth()->user()->posts()->create($data);
        return redirect('/home/');
    }
    public function show($post) {
       return view('posts.showblog', compact('post'));
       //dd($post);
    }
    public function edit($post){
        return view('posts.editblog', compact('post'));
    }
}
