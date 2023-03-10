@props(['title' => 'Erreur!'])

<div class="bg-green-100 border-l-4 border-green-600 text-green-600 p-4" role="alert">
    <p class="font-bold">{{ $title }}</p>
    <p>{{ $slot }}</p>
</div>
