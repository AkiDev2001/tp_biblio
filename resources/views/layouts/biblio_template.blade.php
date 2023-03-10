@extends('layouts.app')
@section('content')
    <div class="flex flex-auto h-full w-full">
        <div class="bg-gray-200 border-r border-gray-400 w-60 px-2 py-1">
            <div class="font-bold">Tous les TPs :</div>
        </div>
        <div class="flex-auto px-2 py-1">
            @yield('documents')
        </div>
    </div>
@endsection
