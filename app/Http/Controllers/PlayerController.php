<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    public function index() //all players
    {
        return Player::all();
    }
 
    public function show(Player $player) //player with the given id
    {
        return $player;
    }

    public function store(Request $request) //creates a player
    {
        $player = Player::create($request->all());
        return response()->json($player,201);
    }

    public function update(Request $request, Player $player) //updates a player
    {
        $player->update($request->all());
        return response()->json($player,200);
    }

    public function delete(Player $player) //deletes the player with given id
    {
        $player->delete();

        return response()->json(null,204);
    }
}
