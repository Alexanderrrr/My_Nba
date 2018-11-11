<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden_words_in_comment');
    }
    public function store($teamId)
    {
        $comment = new Comment();
        $comment->content = request('comment');
        $comment->team_id = $teamId;
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return redirect('/teams');
    }

    public function index()
    {
        return view('comments.forbidden-comments');
    }
}
