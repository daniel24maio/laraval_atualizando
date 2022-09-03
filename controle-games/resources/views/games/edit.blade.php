<x-layout title="Editar Game '{{$game->nome}}'">
    <x-games.form :action="route('games.update',$game->id)" :nome="$game->nome" :plataforma="$game->plataforma">
    </x-games.form>
</x-layout>
