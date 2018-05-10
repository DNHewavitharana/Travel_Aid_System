<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo_room = "";
        if($request->hasFile('photo')){
            $destinationPath="images/hotel";
            $file=$request->photo;
            $extension=$file->getClientOriginalExtension();
            $fileName=rand(10000,99999).".".$extension;
            $file->move($destinationPath,$fileName);
            $photo_room =$fileName;
        }

        if(Auth::check()){
            $comment = Comment::create([
                'body' => $request->input('body'),
                'image1' => $photo_room,
                'user_id' => Auth::user()->id,
                'commentable_id' => $request->input('commentable_id'),
                'commentable_type' => $request->input('commentable_type')

            ]);
            if($comment){
                return back()->with('success' , 'Comment added successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error creating new comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
