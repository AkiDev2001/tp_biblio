@props(['route', 'params'])

<a
    href={{ route($route, $params) }}
    {{ $attributes->merge(['type' => 'submit', 'class' => 'text-sm items-center h-fit bg-blue-100 text-blue-900 font-semibold py-1 px-2 border border-gray-400 rounded-full shadow-sm hover:bg-gray-100 leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</a>
