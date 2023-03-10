@props(['action'])

<form method="get" action={{ $action }}>
    @csrf
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-sm items-center h-fit bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow hover:bg-gray-100 leading-5 text-gray-900 focus:outline-none transition duration-150 ease-in-out']) }}>
        {{ $slot }}
    </button>
</form>
