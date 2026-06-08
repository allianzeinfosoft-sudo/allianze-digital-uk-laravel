<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="robots" content="noindex, nofollow">
     <title>{{ $meta_title ?? 'Allianze Digital' }} </title>
     <meta name="description" content="{{ $meta_description ?? '' }}">
     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
     <meta name="keywords" content="{{ $meta_keywords ?? '' }}">
     <link href="{{ asset('dist/output.css') }}" rel="stylesheet">
     <link href="{{ asset('dist/custom.css') }}" rel="stylesheet">
     <link rel="preload" href="{{ asset('assets/logo-black.png') }}" as="image">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script> 
     

     <script>
          tailwind.config = {
               theme: {
                    extend: {
                         colors: {
                              'custom-blue-dark': '#0c1338',
                              'custom-blue-deep': '#000073',
                              'custom-blue-navy': '#000080',
                              'custom-blue-light': '#d9e4ff',
                              'custom-red-brand': '#e90101',
                              'custom-red-dark': '#d80000',
                              'custom-text-primary': '#1c2539',
                              'custom-text-secondary': '#5d666f',
                              'custom-text-content': '#1d242d',
                              'custom-orange': '#e04700',
                              'custom-footer-bg': '#00002d',
                              'custom-footer-icon': '#3e484e',
                              'brand-red': '#e63329',
                              'brand-orange': '#d95f00',
                              'brand-blue': '#2e3393',
                              'brand-dark': '#0f172a',
                              'brand-light': '#f8fafc'                    
                         },
                         fontFamily: {
                              inter: ['Inter', 'sans-serif'],
                         },
                         borderRadius: {
                              '4xl': '2rem',
                              '5xl': '2.5rem',
                              '6xl': '3rem',
                              'full-plus': '212px',
                         }
                    }
               }
          }
     </script>
     @stack('css')
</head>