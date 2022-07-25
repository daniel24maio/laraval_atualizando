<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(Request $request)
    {
        $games = [
            'Final Fantasy - X',
            'Xenogears',
            'AC - Odyssey'
        ];

        return view('listar-games', compact('games'));
    }
}
