<?php

namespace App\Http\Controllers;
use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($playerId)
    {
        $player = Player::find($playerId);
        return view('players.index', ['player' => $player]);
    }
}
