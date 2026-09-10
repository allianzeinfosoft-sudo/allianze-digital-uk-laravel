<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="robots" content="INDEX, FOLLOW">
     <title>{{ $meta_title ?? 'Allianze Digital' }} </title>
     <meta name="description" content="{{ $meta_description ?? '' }}">
     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
     <meta name="keywords" content="{{ $meta_keywords ?? '' }}">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="dns-prefetch" href="https://www.googletagmanager.com">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
     <link rel="preload" href="{{ asset('assets/logo-black.png') }}" as="image">
     <link href="{{ asset('dist/output.css') }}" rel="stylesheet">
     <link href="{{ asset('dist/custom.css') }}" rel="stylesheet">
     @stack('css')
</head>
