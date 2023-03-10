@extends('layouts.biblio_template')
@section('documents')
    <table class="">
        <thead class="font-bold">
            <tr>
                <td class="px-2 py-1">Nom</td>
                <td class="px-2 py-1">Taille</td>
                <td class="px-2 py-1">Type</td>
                <td class="px-2 py-1"></td>
            </tr>
        </thead>
    @foreach($documents as $document)
        <tr class="border-b border-gray-300 even:bg-gray-200">
            <td class="px-2 py-1">
                {{$document->name}}
            </td>
            <td class="px-2 py-1">
                {{number_format((Storage::size('public/' . $document->path) / (1024 * 1024)), 3, '.') . ' Mo'}}
            </td>
            <td class="px-2 py-1">
                @if(strpos(Storage::mimeType('public/' . $document->path), 'word'))
                    Document Word
                @elseif(strpos(Storage::mimeType('public/' . $document->path), 'pdf'))
                    PDF
                @endif
            </td>
            <td class="px-2 py-1 flex justify-between w-[200px]" >
                <x-rounded-button
                    :route="'document.download'"
                    :params="['file' => $document->path]"
                >
                    Télecharger
                </x-rounded-button>
                <x-danger-rounded-button
                    :route="'document.destroy'"
                    :params="['to_delete' => $document->path]"
                >
                    Supprimer
                    @method('delete')
                </x-danger-rounded-button>
            </td>
        </tr>
    @endforeach
    </table>
    @if($errors->any())
        <x-alert title="Erreur!">
            {{ $errors->first() }}
        </x-alert>
    @endif

    @if(Session::has('deletion_success'))
        <x-success-alert title="Terminé!">
            {{Session::get('deletion_success')}}
        </x-success-alert>
    @endif

@endsection
