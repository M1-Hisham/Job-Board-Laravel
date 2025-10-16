<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->cursorPaginate(10);
        if (!$data) {
            return response()->json(['message' => 'No posts found'], 404);
        }
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // $data = Post::create($request->all());
        $post = new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->author2 = $request->input('author2');
        $post->body = $request->input('body');
        $post->poblished = $request->has('poblished');
        // $post->poblished = $request->input('poblished', false);
        $post->save();

        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);
        $data->update($request->all());
        if (!$data) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::find($id);
        $data->delete();
        if (!$data) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json(null, 204);
    }
}
