<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::cursorPaginate(5);
        return view("post/posts", ["posts" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //    Post::create([
        //     'title' => 'Sample Post Title',
        //     'author' => 'Author Name',
        //     'author2' => 'Co-Author Name',
        //     'body' => 'This is the body of the sample post.',
        //     'poblished' => true,
        //    ]);
        Post::factory()->count(1)->create();
        return redirect('/post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Post::findOrFail($id);
        return view('post/view', ['posts' => $data]);
    }

    /**
     * Show the form for editing  the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // delete the post
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }
}
