<x-layout title="Editar Game '{{$game->nome}}'">
    <x-games.form :action="route('games.update',$game->id)" :nome="$game->nome" :plataforma="$game->plataforma" :update="true">
    </x-games.form>
</x-layout>
