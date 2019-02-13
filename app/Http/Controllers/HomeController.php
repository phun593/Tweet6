<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tweet;
use \App\Follow;
use Illuminate\Support\Facades\Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $user = Auth::user()->id;
        
        $tweets = Tweet::orderBy('created_at','desc')->paginate(5);
        $follows = Follow::all();
        $data['follows'] = $follows;
        $Avatar= Auth::user()->avatar;

        $data['tweets'] = $tweets;
        return view ('post.home', $data,array('user' => Auth::user()));
    }
}
