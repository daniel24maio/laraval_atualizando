<x-layout title="Games" >
    <a href="/games/criar">Adicionar Game</a>
    <ul>
        @foreach ($games as $game)
        <li>{{$game}}</li>
        @endforeach
    </ul>
</x-layout>
