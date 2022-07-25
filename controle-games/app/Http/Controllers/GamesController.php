<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function listarGames()
    {
        $games = [
            'Final Fantasy - X',
            'Xenogears',
            'AC - Odyssey'
        ];

        $html = '<ul>';
        foreach ($games as $game) {
            $html .= "<li>$game</li>";
        }
        $html .= '</ul>';
        echo $html;
    }
}
