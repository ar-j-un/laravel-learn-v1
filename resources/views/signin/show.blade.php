<x-layout title="SignIn">
    <div class="mt-6 text-white">
        <h2 class="font-bold">Logged In Users</h2>
        <div class="mt-6">
            {{ $signinDetails->username }}
        </div>

<div style="margin-top: 20px;">
    <a href="/signin/{{ $signinDetails->id }}/change" style="font-size: 18px; padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; text-decoration: none;">Change Username</a>
</div>

<form method="POST" action="/signin/{{ $signinDetails->id }}">
    @csrf
    @method('DELETE')
<div style="margin-top: 20px;">
    <button type="submit" style="padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Log Out</button>
</div>
</form>
    </div>
</x-layout>