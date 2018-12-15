<?php

namespace FaheemLaravel\Http\Controllers;

use Illuminate\Http\Request;
use FaheemLaravel\PostModel as Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::orderBy('created_at','desc')->get();
        return view('posts.index', ['allPosts' => $allPosts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 'title' => 'bail|required', 'post' => 'required|min:5']);
        
        // If all fields are valid then store the post in database
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->save();   
        
        // redirect to index page where all posts are listed with success message
        return redirect('/posts')->with('success', 'Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id < 1 || !is_numeric($id) )
        {
            return redirect('posts')->with('error', 'No Post Selected!');
        }
        $currentPost = Post::find($id);   
        return view('posts.show')->with('currentPost', $currentPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postToEdit = Post::find($id);
        return view('posts.edit')->with('post', $postToEdit);
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
         $request->validate([ 'title' => 'bail|required', 'post' => 'required|min:5']);
        
        // If all fields are valid then store the post in database
        
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->save();   
        
        // redirect to index page where all posts are listed with success message
        return redirect('/posts')->with('success', 'Post Updated!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postToDelete = Post::find($id);
        $postToDelete->delete();
        
        return redirect('/posts')->with('success', 'Post Deleted!');
        
    }
}
