{{-- properties --}}
@props([
    'bgColor' => null,
    'route' => null,
    'target' => 'self'
])

{{-- Link template. --}}
<a href="{{ route($route) }}" target="_{{ $target }}" {{ $attributes->merge([ 
        'class' => "hover:bg-$bgColor-600 hover:text-gray-300 focus:bg-$bgColor-600 focus:text-gray-300 focus:outline-none transition p-3 m-1 capitalize text-white" 
    ]) }}>
    {{ $slot }}
</a>