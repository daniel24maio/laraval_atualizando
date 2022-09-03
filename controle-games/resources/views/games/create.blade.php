<x-layout title="Novo Game">

    <x-games.form :action="route('games.store')" :nome="old('nome')" :update="false">
    </x-games.form>
</x-layout>
