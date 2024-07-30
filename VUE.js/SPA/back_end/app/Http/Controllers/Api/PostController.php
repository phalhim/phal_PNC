<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\ShowPostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(1);
        $post = Post::all();
        $post = PostResource::collection($post);
        return $post;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        //
        $post = Post::create($request->all());

        return [
            'data'=>true,
           'message'=> 'Created successfully'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::find($id);
        $post = new ShowPostResource($post);
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        //
        $post = Post::find($id);
        $post->update($request->all());
        return [
            'data'=>true,
           'message'=> 'Updated successfully'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        return [
            'data'=>true,
            'message'=> 'Deleted successfully'
        ];
    }
}
