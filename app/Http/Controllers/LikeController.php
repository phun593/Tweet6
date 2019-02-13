<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tweet;
use \App\User;
use \App\Like;
use Illuminate\Support\Facades\Auth;
class LikeController extends Controller
{

    public  function like( Request $request, $id){
        // dd($request);

        // return response()->json(Tweet::all());
        $like = Tweet:: find($id);

        
        $like->user_id = Auth::user()->id;

         $like->like = $request->like;
        
        $like->save();

        

    }
    public function store(Request $request, $id)
    {
        // dd(request()->all());
      	$like = Tweet:: find($id);
        $like->user_id = Auth::user()->id;

        
        $like->like = $like->like + 1 ;
        $like->like = $like->like;
        $like->save();
       
        return redirect('/home');
    }
    public function dislike($id){



        $dislike = Tweet:: find($id);
        $dislike->user_id = Auth::user()->id;

        
        $dislike->dislike = $dislike->dislike + 1 ;
        $dislike->dislike = $dislike->dislike;
        $dislike->save();



        return redirect('/home');
}




    public function index()
    {
        
    
       
        $users = User::all();
        $tweets = Tweet::all();
        $data['users'] = $users;
        return view ('post.userlist', $data);
    }

    public function show()
    {
        
    
       
        $users = User::all();
        $tweets = Tweet::all();
        $data['users'] = $users;
        return view ('post.profile', $data);
    }
    public function follow()
    {
        $users = User::all();
        $tweets = Tweet::all();
        $data['users'] = $users;
        return view ('post.userlist', $data);
        
    
       
       
       
    }



}
