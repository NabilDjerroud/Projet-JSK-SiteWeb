@extends('partials.base')

@section('title', 'Contact')

@section('content')

    <main>

        <div class="text-center mb-8">
            <h1 class="text-3xl text-green-800 font-bold mb-4">Vous avez une question une suggestion, contactez-nous ici</h1>
            <p class="text-lg">Veuillez remplir le formulaire ci-dessous :</p>
        </div>
        <form method="POST" class="mt-5 max-w-md mx-auto p-6 bg-white rounded-md shadow-md">
            <div class="mb-4">
                <label for="name" class="block mb-2 font-bold">Nom:</label>
                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 font-bold">Email:</label>
                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="sujet" class="block mb-2 font-bold">Sujet:</label>
                <input type="text" id="sujet" name="sujet" required class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2 font-bold">Message:</label>
                <textarea id="message" name="message" rows="4" required class="w-full px-3 py-2 border rounded-md"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Envoyer</button>
        </form>

    </main>


@endsection
