<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use \App\Tweet;
use \App\User;
use Image;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;


class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tweets = Tweet::all();
        $data['tweets'] = $tweets;
        return view ('post.showall', $data);
// 
    
        
    
        // $users = User::all();
        // $data['users'] = $users;
        // return view ('post.home', $data);
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }
        
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $tweet = new Tweet;
        $tweet->user_id = Auth::user()->id;
        $tweet->tweet_avatar = Auth::user()->avater;
        $tweet->tweet = $request->input('tweet');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 400)->save( public_path('/uploads/avatars/' . $filename ) );

            
            $tweet->image = $filename;
            
        }

        
        $tweet->save();
         return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet= Tweet::find($id);
        $data['tweet'] = $tweet;
        return  view('post.edit', $data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tweet= Tweet::find($id);
        $tweet->tweet = $request->input('tweet');
        $tweet->save();
        return  redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tweet::destroy($id);

        return redirect('/home');
    }
}
