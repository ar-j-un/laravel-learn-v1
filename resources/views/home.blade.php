<x-layout title="Home">

    <h1>Home</h1>
    <p>
    {{ $greeting }} {{ $person }}!
    </p>
    <div>
        @guest
            <p>out</p>
        @endguest
        @auth
            <a>in</a>
        @endauth
    </div>
</x-layout>