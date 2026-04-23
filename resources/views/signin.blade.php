<x-layout title="SignIn">

    <h1>Sign In</h1>

    <form method="POST" action="/signin">
        @csrf
        <textarea name="name" id="name" cols="30" rows="3"></textarea>
        <button type="submit" ></button>
    </form>
    @if(count($names))
    <div>
        <h2>Signed in Users</h2>
        <ul>
            @foreach ($names as $name)
            <li>{{ $name }}</li>        
            @endforeach
        </ul>
    </div>
    @endif
</x-layout>

    {{-- @auth
        
    @endauth

    @guest
        
    @endguest --}}