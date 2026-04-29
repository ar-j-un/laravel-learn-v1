<x-layout title="SignIn">

    <h1>Sign In</h1>

    <form method="POST" action="/signin">
        @csrf
        <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px;">
        <textarea name="name" cols="30" rows="1" placeholder="username" style="font-size: 20px; width: 300px;"></textarea>
        <textarea name="password" cols="30" rows="1" placeholder="password" style="font-size: 20px; width: 300px;"></textarea>
        <div style="height: 20px; margin-top: -10px;">
            <x-forms.error name="name" />
            <x-forms.error name='password' />
        </div>
        <button type="submit" style="padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; width: 300px; gap: 10px;">Sign In</button>
        </div>
    </form>
    
</x-layout>



        {{--<div style="height: 20px; margin-top: -10px;">
        {{--@if ($errors->has('name')||$errors->has('password'))
            <p style="color: red; font-size: 13px; margin: 0;">{{$errors->first('name')}}{{$errors->first('password')}}</p>
        @endif--}}
        {{--@error('name')
            <p style="color: red; font-size: 13px; margin: 0;">{{ $message }}</p>
        @enderror
        @error('password')
            <p style="color: red; font-size: 13px; margin: 0;">{{ $message }}</p>
        @enderror
        </div>--}}