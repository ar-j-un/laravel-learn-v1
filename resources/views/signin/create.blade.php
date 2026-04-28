<x-layout title="SignIn">

    <h1>Sign In</h1>

    <form method="POST" action="/signin">
        @csrf
        <textarea name="name" cols="30" rows="3"></textarea>
        <button type="submit" ></button>
    </form>
    
</x-layout>