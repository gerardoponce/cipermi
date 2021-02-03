@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-l-blue-3 text-base font-medium text-l-blue-3 bg-indigo-50 focus:outline-none focus:text-l-blue-3 focus:bg-indigo-100 focus:border-l-blue-3 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-l-blue-3 hover:text-l-blue-3 hover:bg-gray-50 hover:border-l-blue-3 focus:outline-none focus:text-l-blue-3 focus:bg-gray-50 focus:border-l-blue-3 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
