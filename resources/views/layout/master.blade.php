<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    @include('layout.header')
    @yield('content')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>