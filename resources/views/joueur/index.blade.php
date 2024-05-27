@extends('partials.base')

@section('title', __('title'))

@section('content')

@if(session("success"))
    <x-alert :type="'success'">
        {{(session("success"))}}
    </x-alert>
@endif

@if($joueurs->isEmpty())
    <x-alert :type="'danger'">
        {{ __('no_players_available') }}
    </x-alert>
@endif
    <div class="py-28 flex p-5 h-full place-content-around"
            style="background-image: url('{{ Vite::asset('resources/img/chandail-dessin.jpg') }}'); background-size: cover; background-position: top;">
            <div class="mt-12">
                
                <p class="text-3xl mt-8 leading-10 font-bold text-white">{{ __('presentation_effectif') }}</p>
            </div>
            <div>
                <img class="mt-12 w-40" src="{{ Vite::asset('resources/img/logo-JSK.png') }}" alt="logo">
            </div>
    </div>

        <h1 class="text-center text-5xl text-green-800 mt-12">{{ __('list_joueurs_title') }}</h1>
    <div class="flex justify-center my-3 mt-4 py-12">
        <div class="space-x-4">
            <p class="text-center mb-4 font-bold">{{ __('sort_by_name') }} / {{ __('sort_by_jersey_number') }}</p>
            <a class="btn-sort inline-block px-4 py-2 rounded-lg bg-yellow-500 text-yellow-900 hover:bg-yellow-600 hover:text-yellow-100" href="{{ route('joueur.index', ['tri'=> 'numero', 'direction' => 'asc']) }}">{{ __('ascending_jersey_number') }}</a>
            <a class="btn-sort inline-block px-4 py-2 rounded-lg bg-yellow-500 text-yellow-900 hover:bg-yellow-600 hover:text-yellow-100" href="{{ route('joueur.index', ['tri'=> 'nom']) }}">{{ __('sort_by_name_url') }}</a>
        </div>
        <div class="space-x-4">
            <p class="text-center mb-4 font-bold">{{ __('sort_by_physical_condition') }}</p>
            @foreach ($conditionPhysiques as $condition_physique)
                <a class="btn-condition inline-block px-4 py-2 rounded-lg bg-green-800 text-white hover:bg-green-900 hover:text-green-200" href="{{ route('joueur.index',['conditionPhysique' => $condition_physique->id ])}}">{{$condition_physique->etat}}</a>
            @endforeach
        </div>
    </div>
    <main class="px-8 py-12 bg-gray-200">

    <section class="flex flex-wrap gap-3 justify-evenly">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($joueurs as $joueur)
            <div class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                <a href="{{ route('joueur.show', ['joueur' => $joueur->id]) }}" class="text-amber-900 z-10 basis-1/4">
                    @if($joueur->image)
                        <img src="{{ $joueur->imageFullPath() }}" alt="{{ __('full_name') }} de {{ $joueur->nom }}" 
                            class="w-full h-80 mb-4 rounded-lg">
                    @else
                        <img src="{{ Vite::asset('resources/img/inconnu.jpg') }}" alt="{{ __('full_name') }} par défaut" 
                            class="w-full h-80 mb-4 rounded-lg shadow-md">
                    @endif
                    <p class="text-2xl my-4 font-bold text-green-800">{{ $joueur->nom }} {{ $joueur->prenom }}</p>
                    <p class="text-lg text-yellow-950"><strong>{{ __('date_of_birth') }} :</strong> {{ $joueur->date_de_naissance }}</p>
                    <p class="text-lg text-yellow-950"><strong>{{ __('position') }} :</strong> {{ $joueur->poste }}</p>
                    <p class="text-lg text-yellow-950"><strong>{{ __('jersey_number') }} :</strong> {{ $joueur->numero }}</p>
                    @if($joueur->condition_physique !== null)
                        <p class="text-lg text-yellow-950"><strong>{{ __('physical_condition') }} :</strong> {{ $joueur->condition_physique->etat }}</p>
                    @else
                        <p class="text-lg text-yellow-950"><strong>{{ __('physical_condition') }} :</strong> / </p>
                    @endif
                </a>
            <div class="flex justify-between my-8">
                <a href="{{ route('joueur.edit', $joueur)}}" class="btn-action btn-edit inline-block px-4 py-2 rounded-lg bg-green-500 text-white hover:bg-green-600">{{ __('edit') }}</a>
                <form action="{{ route("joueur.destroy", $joueur) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-action btn-delete inline-block px-4 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600">{{ __('delete') }}</button>
                </form>
            </div>
            </div>
            @empty
            <p class="bg-amber-50 p-12 self-center text-lg rounded-lg">{{ __('no_players_available') }}</p>
            @endforelse
        </div>
        <div class="mt-12 flex flex-col-reverse ">
            {{ $joueurs->links() }}
            
        </div>

    </section>
</main>


@endsection
