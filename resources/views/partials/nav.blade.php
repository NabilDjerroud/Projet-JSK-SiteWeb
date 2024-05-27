<nav class="flex justify-evenly p-5">
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/') ? "active" : ""}}" href="{{route('index')}}">{{ __('Home') }}</a>
    {{-- <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/team') ? "active" : ""}}" href="{{route('team')}}">{{ __('Team') }}</a> --}}
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/players') ? "active" : ""}}" href="{{route('joueur.index')}}">{{ __('Players') }}</a>
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/honours') ? "active" : ""}}" href="{{route('palmares')}}">{{ __('Honours') }}</a>
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/contact') ? "active" : ""}}" href="{{route('contact')}}">{{ __('Contact') }}</a>
</nav>
