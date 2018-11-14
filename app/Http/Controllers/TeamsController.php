<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use App\News;
class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teams = Team::all();
        $comments = Comment::latest()->paginate(5);
        return view('teams.index', ['teams' => $teams, 'comments' => $comments]);
    }

    public function show($teamId)
    {
        $team = Team::with('news')->find($teamId);
        return view('teams.show', ['team' => $team]);
    }
}
