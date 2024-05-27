@extends('partials.base')

@section('title', 'Palmares')

@section('content')

    <main class="bg-gray-100 py-8">
        <div class='py-20 flex bg-gradient-to-r from-green-500 to-cyan-500 p-5 h-full place-content-around'
            style="background-image: url({{ Vite::asset('resources/img/public.jpg') }}); background-size: cover; background-position: center;">
            <div class="">
                <h1 class="text-6xl mt-12">Palmarès de la Jeunesse Sportive de la Kabylie (JSK)</h1>
            </div>
            <div>
                <img class="size-48" src="{{ Vite::asset('resources/img/logo-JSK.png') }}" alt="logo">
            </div>
        </div>


        <div class="container mx-auto mt-12">
            <h2 class="text-4xl font-semibold mb-4">À l'échelle Nationale</h2>
            <div class="flex flex-wrap gap-8 justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <div><img src="{{ Vite::asset('resources/img/championnat.png') }}"
                                alt="Trophée Championnat d'Algérie" class="w-16 h-16 mr-4"></div>
                        <div><span class="font-semibold text-lg">Championnat d'Algérie (14 titres):</span></div>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Champions: 1973, 1974, 1977, 1980, 1982, 1983, 1985, 1986, 1989, 1990, 1995, 2004, 2006, 2008
                        </li>
                        <li>Vice-champion: 1978, 1979, 1981, 1988, 1999, 2002, 2005, 2007, 2009, 2014, 2019</li>
                        <li>Troisième: 1976, 1984, 1994, 2001, 2010, 2016</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/trophee-Coupe-dAlgerie.jpeg') }}"
                            alt="Trophée Coupe d'Algérie" class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Coupe d'Algérie (5 titres):</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Vainqueur: 1977, 1986, 1992, 1994, 2011</li>
                        <li>Finaliste: 1979, 1991, 1999, 2004, 2014, 2018</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/supercoupe-algerie.jpeg') }}"
                            alt="Trophée Supercoupe d'Algérie" class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Supercoupe d'Algérie (1 titre):</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Vainqueur: 1992</li>
                        <li>Finaliste: 1994, 1995, 2006</li>
                    </ul>
                </div>
            </div>

            <h2 class="text-4xl font-semibold mt-8 mb-4">À l'échelle Internationale</h2>
            <div class="flex flex-wrap gap-8 justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/Ligue-des-champions-dAfrique.jpg') }}"
                            alt="Trophée Ligue des champions de la CAF" class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Ligue des champions de la CAF (2 titres):</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Vainqueur: 1981, 1990</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/coupe-caf.jpg') }}" alt="Trophée Coupe de la CAF"
                            class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Coupe de la CAF (3 titres):</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Vainqueur: 2000, 2001, 2002</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/Coupe_des_vainqueurs_coupe.jpg') }}"
                            alt="Trophée Coupe d'Afrique des vainqueurs de coupe" class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Coupe d'Afrique des vainqueurs de coupe (1 titre):</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Vainqueur: 1995</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/Supercoupe-caf.png') }}" alt="Trophée Supercoupe de la CAF"
                            class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Supercoupe de la CAF (1 titre):</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Vainqueur: 1982</li>
                        <li>Finaliste: 1996</li>
                    </ul>
                </div>
            </div>
            <h2 class="text-4xl font-semibold mt-8 mb-4">À l'échelle Régionale</h2>
            <div class="flex flex-wrap gap-8 justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/coupe-maghreb.jpg') }}"
                            alt="Trophée Coupe du Maghreb des clubs champions" class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Coupe du Maghreb des clubs champions:</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Finaliste: 1974</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg p-6 shadow-md">
                    <div class="flex items-center">
                        <img src="{{ Vite::asset('resources/img/coupe-maghreb.jpg') }}"
                            alt="Trophée Coupe nord-africaine des clubs champions" class="w-16 h-16 mr-4">
                        <span class="font-semibold text-lg">Coupe nord-africaine des clubs champions:</span>
                    </div>
                    <ul class="list-disc pl-8 mt-4">
                        <li>Troisième: 2008</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>



@endsection
