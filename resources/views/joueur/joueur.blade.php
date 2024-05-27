@extends('partials.base')

@section('title', $title)

@section('content')

<div class="mt-12">
    <h1 class="text-center my-12 text-5xl text-green-800">Fiche de {{ $joueur->nom }} {{ $joueur->prenom }}</h1>
</div>
<main class="flex-auto flex justify-center items-center text-center gap-5">
    <section class="flex gap-5 justify-center items-center">
        <div class="w-2/5 md:w-1/2">
            <div class="relative w-full h-96">
                @if($joueur->image)
                <img src="/storage/{{ $joueur->image }}" alt="Image de {{ $joueur->nom }} {{ $joueur->prenom }}" class="object-cover w-full h-full rounded-lg shadow-md">
                @else
                <img src="{{ Vite::asset('resources/img/inconnu.jpg') }}" alt="Image par défaut" class="object-cover w-full h-full rounded-lg shadow-md">
                @endif
            </div>
        </div>
        <div class="w-3/5 md:w-1/2 bg-gray-200 border border-gray-300 p-6 rounded-lg shadow-md ">
            <p class="text-2xl font-bold">{{ $joueur->nom }} {{ $joueur->prenom }}</p>
            <p class="text-lg">Date de naissance: {{ $joueur->date_de_naissance }}</p>
            <p class="text-lg">Poste: {{ $joueur->poste }}</p>
            <p class="text-lg">Numéro de maillot: {{ $joueur->numero }}</p>
        </div>
    </section>
</main>


@endsection
