<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    public function index()
    {
        return Player::all();
    }
 
    public function show(Player $player)
    {
        return $player;
    }

    public function store(Request $request)
    {
        $player = Player::create($request->all());
        return response()->json($player,201);
    }

    public function update(Request $request, Player $player)
    {
        $player->update($request->all());
        return response()->json($player,200);
    }

    public function delete(Player $player)
    {
        $player->delete();

        return response()->json(null,204);
    }
}
