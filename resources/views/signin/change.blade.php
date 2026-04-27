<x-layout title="SignIn">

    <h1>Change Username</h1>


<form method="POST" action="/signin/{{ $signinId->id }}">
    @csrf
    @method('PATCH')
    <div style="display: flex; align-items: left; gap: 10px;">
        <textarea name="username" cols="30" rows="1" style="font-size: 18px;">{{ $signinId->username }}</textarea>
        <button type="submit" style="padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Change</button>
    </div>
</form>


</x-layout>     