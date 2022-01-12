<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jônatas M Campos</title>

    {{-- ↓↓ favicon ↓↓ --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.jpg') }}">

    {{-- ↓↓ importing sass ↓↓ --}}
    <link rel="stylesheet" href="{{ asset('css/sass/main.css') }}">

    {{-- ↓↓ importing bootstrap ↓↓ --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

</head>

<body>
    {{-- adding navbar --}} @include('layouts.sections.navbar')
    {{-- content from view welcome --}} @yield('conteudo')

    {{-- ↓↓ importing main.js file ↓↓ --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
