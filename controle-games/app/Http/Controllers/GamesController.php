<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
class GamesController extends Controller
{
    public function index(Request $request)
    {
        $games = Games::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso');

        return view('games.index')->with('games',$games)->with('mensagemSucesso',$mensagemSucesso);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'nome' => ['required','min:2'],
           'plataforma' =>['required']
        ]);
        $game = Games::create($request->all());

        return to_route('games.index')->with('mensagem.sucesso', "Game '{$game->nome}'inserido com sucesso");
    }

    public function destroy(Games $game)
    {
        $game->delete();
        //$request->session()->put('mensagem.sucesso', 'Game removido com sucesso');
        return to_route('games.index')->with('mensagem.sucesso', "Game '{$game->nome}' removido com sucesso");
    }

    public function edit(Games $game)
    {
        return view('games.edit')->with('game',$game);

    }

    public function update(Games $game, Request $request)
    {
        $game->fill($request->all());
        $game->save();

        return to_route('games.index')->with('mensagem.sucesso', "Game '{$game->nome}' editado com sucesso");
    }

}
