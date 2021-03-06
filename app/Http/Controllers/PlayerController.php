<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;


class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', [ 'players' => $players]);
    }

    public function show($id)
    {
        $player = Player::find($id);
        return view('players.show',[ 'player' => $player]);
    }
}
