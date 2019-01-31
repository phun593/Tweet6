<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tweet;
use \App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getindex(){
		return view('auth.login');
	}
	public function home(){
		$Avatar = Auth::user()->avatar;

		return view ('post.index');
	}


	public function profile(){


		// $user = User::find(1);


		$id = Auth::user()->id;

		$tweets = Tweet::where('user_id', $id )->orderBy('created_at','desc')->get();
       

        $data['tweets'] = $tweets;
        return view ('post.profile', $data);
        

	


		return view('post.profile');
	}
	
	public function logout(){
		
		return view('auth.login');
	}

}