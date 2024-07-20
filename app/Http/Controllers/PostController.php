<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('deleted',0)->paginate();
        return view('post.index',['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $post = Post::create([
            'subject' => $request->subject,
            'content' => $request->content,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/post/' . $post->id);
    }

    public function show(Post $post)
    {
        return view('post.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //if(auth()->user()->can('edit-post', $post)){
            return view('post.edit',['post' => $post]);
        //}
        //abort(403);
    }

    public function update(Request $request, Post $post)
    {

        $post->update([
            'subject' => $request->subject,
            'content' => $request->content,
        ]);
        return redirect('/post/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->update([
            'deleted' => 1
        ]);
        return redirect('/post');
    }
}
