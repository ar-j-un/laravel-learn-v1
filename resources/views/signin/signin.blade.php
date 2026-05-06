<x-layout title="SignIn">

    <h1>Sign In</h1>    
    <h2>Enter Password For {{ $signinDetails->username }}</h2>
    <form method="POST" action="/signin/{{$signinDetails->id}}/signin">
        @csrf
        <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px;">
        <input type="password" name="password" placeholder="password" style="font-size: 20px;">
        <div style="height: 20px; margin-top: -10px;">
            <x-forms.error name='password' />
        </div>
        <button type="submit" style="padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; width: 300px; gap: 10px;">Sign In</button>
        </div>
    </form>

</x-layout>