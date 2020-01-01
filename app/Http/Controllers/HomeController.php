<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     //User::find($user);
    //     return view('home');
    // }
    // public function show($user)
    // {
    //     //User::find($user);
    //     return view('/home/{$user->id}');
    // }
    public function show($user)
    {
        //dd(User::findOrFail($user));
         $user = User::findOrFail($user);
        return view('home' , compact ('user'));
    }
}
