<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Contructor function
     * Runs Authentication middleware to check if user is logged in.
     * Exceptions on Blog and Show Blog pages
     * @return void
     */

     public function __construct(){
         $this->middleware('auth',['except' => ['index','show']]);
     }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(4);
        $title = "| Posts";
        return view('posts.index')->with('title',$title)->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "| New Post";
        return view('posts.create')->with('title',$title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'post' => 'required'
        ]);

        //Add new Post

        $post = new Post;

        $post->title = $request->input('title');
        $post->body = $request->input('post');
        $post->user_id = auth()->user()->id;

        $post->save();

        return redirect('/dashboard')->with('success', ''.$post->title.' added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $title = "| ".$post->title;
        return view('posts.show')->with('title',$title)->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Checking if post exists
        if(!$post){
            return redirect('/posts')->with('error','Well you can\'t edit what\'s not there. 🤷');            
        }

        //Checking for valid user
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error','Nuh-uh-uhh, you can\'t do that');
        }
        
        $title = "| Edit ".$post->title;
        return view('posts.edit')->with('title',$title)->with('post', $post);
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
        $this->validate($request,[
            'title' => 'required',
            'post' => 'required'
        ]);

        //Update Post

        $post = Post::find($id);
        $newPost = new Post;
        //Checking if post exists
        if(!$post){
            return redirect('/posts')->with('error','Well you can\'t update what\'s not there. 🤷');            
        }

        //Checking for valid user
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error','LOL, brah please... Gimme more credit that that.');
        }

        $newPost->title = $request->input('title');
        $newPost->body = $request->input('post');

        Post::where('id',$id)->update([
            'title' => $newPost->title,
            'body' => $newPost->body
        ]);

        return redirect('/posts/'.$id)->with('success', ''.$post->title.' updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        //Checking if post exists
        if(!$post){
            return redirect('/posts')->with('error','Whoa.. Chill yo...You don\'t even exist.');            
        }
        //Checking for valid user
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error','Whoa.. Chill yo...');
        }

        $post->delete();

        return redirect('/dashboard')->with('success', ''.$post->title.' deleted.');
    }
}
