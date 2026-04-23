<x-layout title="Functions">

    {{-- @dd($options) --}}
    
    @forelse ($options as $option)
     <li>{{ $option }}</li>
    @empty
     <P>no options available</P>
        
    @endforelse

    <h1>Hello world</h1>
    <p>
    </p>
</x-layout>

