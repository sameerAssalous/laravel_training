<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
 	public function index()
    {
        return Comment::all();
    }

    public function show(Comment $comment)
    {
        return $comment;
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());

        return response()->json($comment, 201);
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());

        return response()->json($comment, 200);
    }

    public function delete(Comment $comment)
    {
        $comment->delete();

        return response()->json(null, 204);
    }
	public function showBySlug($slug)
    {
    	$name = str_replace('-',' ', $slug);
        return Comment::where('name', $slug)->firstOrFail();
    }    
}
