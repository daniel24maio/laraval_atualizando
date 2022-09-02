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

        return view('games.index', compact('games'), compact('mensagemSucesso'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        Games::create($request->all());

        $request->session()->flash('mensagem.sucesso', 'Game inserido com sucesso');

        return to_route('games.index');
    }

    public function destroy(Request $request)
    {
        Games::destroy($request->game);
        //$request->session()->put('mensagem.sucesso', 'Game removido com sucesso');
        $request->session()->flash('mensagem.sucesso', 'Game removido com sucesso');

        return to_route('games.index');
    }
}
