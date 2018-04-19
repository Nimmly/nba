<?php

namespace App\Http\Controllers;

use App\Team;
use App\Comment;
use App\Mail\CommentReceived;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($team_id)
    {
        $this->validate(request(), ['content' => 'required|min:15']);
        $user_id = auth()->user()->id;
        $comment = new Comment();
        $comment->content = request('content');
        $comment->team_id = $team_id;
        $comment->user_id = $user_id;
        $comment->save();
        
        \Mail::to($comment->team)->send(new CommentReceived($comment));
        return redirect()->back();
    }
        

}

