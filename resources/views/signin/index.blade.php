<x-layout title="SignIn">

    <h1>Sign In</h1>

    {{--<form method="POST" action="/signin">
        @csrf
        <textarea name="name" cols="30" rows="3"></textarea>
        <button type="submit" ></button>
    </form> --}}
    @if($names->count())
    <div>
        <h2>Signed in Users</h2>
        <ul>
            @foreach ($names as $name)
            <a href="/signin/{{$name->id}}">{{ $name->username }}</a>
          {{--  <li>{{ $name->username }}</li> --}}
            @endforeach
        </ul>
    </div>
    <div>
        <a href="/signin/create">New User Sign In</a>
    </div>
    @else
        <p>No Loged In User <a href="/signin/create">New User Sign In</a></p>
    @endif


</x-layout>

    {{-- @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

        <form method="POST" action="/signin">
            @csrf

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit">Login</button>
        </form> --}}


    {{--<form method="POST" action="/signin">
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
    @endif--}}


    {{-- @auth
        
    @endauth

    @guest
        
    @endguest --}}