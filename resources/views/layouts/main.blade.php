<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="js/app.js" defer></script>
    @stack('head-scripts')

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @stack('styles')

    <title>@yield('title') | Amigo Secreto</title>
</head>

<body>
    <!-- Conteúdo da página -->
    @yield('content')

    {{-- Componentes escondidos. Ex: modais --}}
    @stack('hidden-components')

    <!-- Scripts comuns -->
    @stack('scripts')
</body>
