@props(['active'])

@php
$classes = ($active ?? false)
//            ? 'inline-flex justify-center items-center my-auto h-fit bg-gray-300 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out'
            ? 'inline-flex justify-center my-auto text-md items-center h-fit bg-green-300 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow-inner leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex justify-center my-auto text-md bg-gray-100 h-fit hover:bg-green-300 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow-sm leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
