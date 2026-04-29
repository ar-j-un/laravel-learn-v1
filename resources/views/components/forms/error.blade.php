
@props([
    'name' => 'required'
])

    @error($name)
        <p style="color: red; font-size: 13px; margin: 0;">{{ $message }}</p>
    @enderror