@props(['route', 'params'])

<form method="post" action={{ route($route, $params) }}>
    @csrf
    <button
        {{ $attributes->merge(['type' => 'submit', 'class' => 'text-sm items-center h-fit bg-red-100 text-red-900 font-semibold py-1 px-2 border border-gray-400 rounded-full shadow-sm hover:bg-red-50 leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out']) }}>
        {{ $slot }}
    </button>
</form>
