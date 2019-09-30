<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest as myRequest;
use Carbon\Carbon;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param myRequest $request
     * @param Post $post
     * @return void
     */
    public function store(myRequest $request, Post $post)
    {
        //upload the image

        $hasfile = $request->hasFile('image');
        if ($hasfile) {

            $image = $request->image->store('iceCap');

        }
        // create a post

        Post::create([
            "title" => $request->title,
            "description" => $request->description,
            "content" => \request('content'),
            "image" => $image

        ]);
        //flash a message
        session()->flash('success', 'what is love');
        return redirect(route('posts.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create-edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param myRequest $request
     * @param Post $post
     * @return void
     */
    public function update(myRequest $request, Post $post)
    {
        $post->update([
            "title" => \request('title'),
            "description" => \request('description'),
            "content" => \request('content')
        ]);
        session()->flash('success', 'The Post has been updated successfully');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
