@extends('layouts.main')

@section('title', 'Sorteio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/components/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/giveway-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/person-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/alert.css') }}">
@endpush

@push('head-scripts')
    <script src="{{asset('js/components/person-card.js')}}" defer></script>
    <script src="{{asset('js/components/header.js')}}" defer></script>
    <script src="{{asset('js/components/modal.js')}}" defer></script>
    <script src="{{asset('js/components/alert.js')}}" defer></script>
@endpush

@push('hidden-components')
    <x-alert />
    <x-modal />
@endpush

@section('content')
    <x-header />

    <main class="safe-area py-4">
        <div class="d-flex flex-column gap-2 py-4">
            @if(isset($giveways) && !empty($giveways))
                <div class="d-flex flex-column gap-2">
                    @foreach($giveways as $giveway)
                        <x-giveway-card
                            :personX="$giveway['person_x']"
                            :personY="$giveway['person_y']" />
                    @endforeach
                </div>
            @else
                <p class="text-center">Nenhum usuário, crie um usuário</p>
            @endif
        </div>
    </main>
@endsection
