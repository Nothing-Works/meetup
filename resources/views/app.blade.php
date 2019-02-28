<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="turbolinks-cache-control" content="no-cache">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://editor.unlayer.com/embed.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app" data-component="{{ $name }}" data-props="{{ json_encode($data) }}"></div>
    <script>
        window.shared = @json($shared);
        window.editor = unlayer;

    </script>
</body>

</html>
