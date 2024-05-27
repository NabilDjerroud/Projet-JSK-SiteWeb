@extends('partials.base')

@section('title', 'Equipe')

@section('content')


    <main class=" bg-gray-200">

        <div class="mt-12 py-20 flex bg-gradient-to-r from-green-500 to-cyan-500 p-5 h-full place-content-around"
            style="background-image: url('{{ Vite::asset('resources/img/fans.jpg') }}'); background-size: cover; background-position: bottom;">
            <h1 class="text-3xl font-bold mb-8 text-center text-white">Effectif</h1>
        </div>
        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-6 text-gray-800">Joueurs</h2>

            <h3 class="mb-12 ">Gardiens de but
                <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ Vite::asset('resources/img/rehmani.jpg') }}" alt="Photo de joueur"
                        class="w-full mb-4 rounded-lg">
                    <div class="font-semibold text-lg mb-1">
                        <p>Nom Prénom</p>
                    </div>
                    <div class="text-gray-600">
                        <p>Gardien de but</p>
                        <p>1</p>
>>>>>>> 273062cc6ab1cd04cadf1ba7111db3b93efa5f3b
                    </div>
                </div>
                <h3 class="mt-12">Defenseurs
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                    
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/souyad1.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Badr Eddine Souyad</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Défenseur</p>
                            <p>4</p>
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/souyad1.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Badr Eddine Souyad</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Défenseur</p>
                            <p>4</p>
                        </div>
                    </div>
                </div>
                <h3 class="mt-12">Milieu de terrain
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                    
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/boualia11.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Nom Prénom</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Milieu de terrain</p>
                            <p>24</p>
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/boualia11.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Nom Prénom</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Milieu de terrain</p>
                            <p>24</p>
                        </div>
                    </div>
                </div>
                <h3 class="mt-12">Attaquants
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                    
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/rdjem.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>
                            <p>Nom Prénom</p>
                            </p>
                        </div>
                        <div class="text-gray-600">
                            <p>Attaquant</p>
                            <p>10</p>
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/rdjem.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>
                            <p>Nom Prénom</p>
                            </p>
                        </div>
                        <div class="text-gray-600">
                            <p>Attaquant</p>
                            <p>10</p>
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/rdjem.jpg') }}" alt="Photo de joueur"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>
                            <p>Nom Prénom</p>
                            </p>
                        </div>
                        <div class="text-gray-600">
                            <p>Attaquant</p>
                            <p>10</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-6 text-gray-800">Staff</h2>
                <h4 class="mt-12">Technique
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
                    <div class="mb-12 rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                </h4>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/zizou.jpg') }}" alt="Photo de membre du staff"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Nom Prénom</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Entraineur en chef</p>
                        </div>
                    </div>
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/carlo.jpg') }}" alt="Photo de membre du staff"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Nom Prénom</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Entraineur adjoint</p>
                        </div>
                    </div>
                </div>
                <h4 class="mt-12">Medical
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/rdem.jpg') }}" alt="Photo de membre du staff"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Nom Prénom</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Médecin</p>
                        </div>
                    </div>
                </div>
                <h4 class="mt-12">Préparateurs physiques
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-yellow-400"></div>
                    <div class="rounded-lg bottom-0 left-0 h-5 w-full bg-lime-700"></div>
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                    <div
                        class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <img src="{{ Vite::asset('resources/img/images.jpeg') }}" alt="Photo de membre du staff"
                            class="w-full mb-4 rounded-lg">
                        <div class="font-semibold text-lg mb-1">
                            <p>Nom Prénom</p>
                        </div>
                        <div class="text-gray-600">
                            <p>Préparateur physique</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection
