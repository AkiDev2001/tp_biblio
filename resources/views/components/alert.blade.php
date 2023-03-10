@props(['title' => 'Erreur!'])

<div class="bg-red-100 border-l-4 border-red-600 text-red-600 p-4" role="alert">
    <p class="font-bold">{{ $title }}</p>
    <p>{{ $slot }}</p>
</div>
