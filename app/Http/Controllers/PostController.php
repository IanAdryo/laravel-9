<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller{

    public function index() {

        $posts = Post::get();


        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post) {

        return view('posts.show', ['post'=> $post]);

    }

    public function create() {

        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request) {

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // Post::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);

        Post::create($request->validated());

        //session()->flash('status', 'Post created!');
        //return redirect()->route('post.index'); //Sin helper
        return to_route('post.index')->with('status', 'Post created!');  //con helper y session por with

    }

    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post) {

        //$post = Post::find($post);
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // $post->update([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body'),
        // ]);

        $post->update($request->validated());

        // session()->flash('status', 'Post updated!');
        //return redirect()->route('post.index'); //Sin helper
        return to_route('post.show', $post)->with('status', 'Post updated!');  //con helper
    }

}
