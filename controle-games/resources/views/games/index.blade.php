<x-layout title="Games" >
    <a href="{{route('games.create')}}" class="btn btn-dark mb-2">Adicionar Game</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Game</th>
                <th scope="col">Plataforma</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($games as $game)
            <tr>
                <td> {{$game->nome}}</td>
                <td> {{$game->plataforma}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
