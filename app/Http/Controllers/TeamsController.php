<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;


class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teams = Team::all();
        $comments = Comment::all();
        return view('teams.index', ['teams' => $teams, 'comments' => $comments]);
    }

    public function show($teamId)
    {
        $team = Team::find($teamId);
        return view('teams.show', ['team' => $team]);
    }
}
