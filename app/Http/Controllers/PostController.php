<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //for CRUD
        $newPost = new Post; //this is a new instance of the Post fields
        $newPost->subject = "New Blog Post #1";
        $newPost->message = "Lorem ipsum donor";
        $newPost->save();

        //since we never made other fields apart from subject and field in the fillable in our Post model,
        //no matter what we pass or store, those will never change
        
        $posts = Post::all();
        // return view('posts.index', compact('posts'));
        //compact means to serialize the db records into an array
        //posts.index check the routes with the command
        /*
            php artisan route:list
        */

        return view('posts.index', [
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //the $request->all makes it more readable and only outputs the important information you want
        // print_r($request->all()); exit;
        $input = $request->all();
        $newPost = new Post; //this is a new instance of the Post fields
        $newPost->subject = $input['subject'];
        $newPost->message = $input['message'];
        $newPost->save();

        //since we never made other fields apart from subject and field in the fillable in our Post model,
        //no matter what we pass or store, those will never change

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
