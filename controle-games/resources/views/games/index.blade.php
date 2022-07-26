<x-layout title="Games" >
    <a href="/games/criar" class="btn btn-dark mb-2">Adicionar Game</a>
    <ul class="list-group">
        @foreach ($games as $game)
        <li class="list-group-item">{{$game}}</li>
        @endforeach
    </ul>
</x-layout>
