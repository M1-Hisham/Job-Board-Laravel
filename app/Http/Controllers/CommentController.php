<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use App\Models\comment;

class CommentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // comment::create([
        //     'content' => 'This is a sample comment body.',
        //     'author' => 'Commenter Name',
        //     'post_id' => 5,
        //    ]);
        Comment::factory()->count(2)->create();
        return redirect('/comments');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommentRequest $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/comments');
    }
}
