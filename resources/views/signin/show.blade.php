<x-layout title="SignIn">
    <div class="mt-6 text-white">
        <h2 class="font-bold">Hi {{ $signinDetails->username }}</h2>

@auth
@if(Auth::id() === $signinDetails->id)

<form method="POST" action="/signin/{{$signinDetails->id}}/signout">
@csrf
@method('DELETE')

<div style="margin-top: 20px;">
    <button type ="submit" style="font-size: 18px; padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; text-decoration: none;">Sign Out</button>
</div>

</form>

@else

        <div style="margin-top: 20px;">
            <p style="color: gray;">You are signed in as a different user.</p>
        </div>
@endif

@else
<div style="margin-top: 20px;">
    <a href="/signin/{{$signinDetails->id}}/signin" style="font-size: 18px; padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; text-decoration: none;">Sign In</a>
</div>

@endauth

<div style="margin-top: 20px;">
    <a href="/signin/{{ $signinDetails->id }}/change" style="font-size: 18px; padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; text-decoration: none;">Change Username</a>
</div>

<form method="POST" action="/signin/{{ $signinDetails->id }}">
    @csrf
    @method('DELETE')
<div style="margin-top: 20px;">
    <button type="submit" style="font-size: 17px; padding: 8px 16px; background-color: red; color: white; border: none; border-radius: 4px; cursor: pointer;">Delete Account</button>
</div>
</form>
</div>
</x-layout>