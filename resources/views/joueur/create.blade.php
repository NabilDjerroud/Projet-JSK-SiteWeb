@extends('partials.base')

@section('title', 'Ajouter un joueur')

@section('content')

    <main class="py-12 flex-auto flex flex-col justify-center align-center text-center gap-5 bg-white">
        <h1 class="text-3xl font-bold mb-8">Ajouter un joueur</h1>
        <form action="{{ route('joueur.store') }}" method="POST" enctype="multipart/form-data" accept="image/*"
            class="max-w-md mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="image" class="text-left block mb-2 font-bold">Image</label>
                <input type="file" name="image" id="image"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('image') }}">
                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nom" class="text-left block mb-2 font-bold">Nom</label>
                <input type="text" name="nom" id="nom"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('nom') }}">
                @error('nom')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="prenom" class="text-left block mb-2 font-bold">Prénom</label>
                <input type="text" name="prenom" id="prenom"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('prenom') }}">
                @error('prenom')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="date_de_naissance" class="text-left block mb-2 font-bold">Date de naissance</label>
                <input type="date" name="date_de_naissance" id="date_de_naissance"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="poste" class="text-left block mb-2 font-bold">Poste</label>
                <select name="poste" id="poste"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500">
                    <option value="">Sélectionnez un poste</option>
                    <option value="Gardien" {{ old('poste') == 'Gardien' ? 'selected' : '' }}>Gardien</option>
                    <option value="Défenseur" {{ old('poste') == 'Défenseur' ? 'selected' : '' }}>Défenseur</option>
                    <option value="Attaquant" {{ old('poste') == 'Attaquant' ? 'selected' : '' }}>Attaquant</option>
                    <option value="Milieu" {{ old('poste') == 'Milieu' ? 'selected' : '' }}>Milieu</option>
                </select>
                @error('poste')
                    <p class="text-red-600 text-sm mt-1">{{ $message }} ex: 'Gardien ou Défenseur ou Attaquant ou Milieu'
                    </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="numero" class="text-left block mb-2 font-bold">Numéro</label>
                <input type="number" name="numero" id="numero"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500"
                    value="{{ old('numero') }}">
                @error('numero')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="condition_physique_id" class="text-left block mb-2 font-bold">Condition Physique</label>
                <select name="condition_physique_id" id="condition_physique_id"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500">
                    <option value="">Sélectionnez une condition physique</option>
                    @foreach($conditionPhysiques as $conditionPhysique)
                        <option value="{{ $conditionPhysique->id }}" {{ old('condition_physique_id') == $conditionPhysique->id ? 'selected' : '' }}>
                            {{ $conditionPhysique->etat }}
                        </option>
                    @endforeach
                </select>
                @error('condition_physique_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <button
                class="bg-green-700 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-600 transition duration-200"
                type="submit">Envoyer</button>
        </form>
    </main>
@endsection
