<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.sand.min.css"
      >
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
     

    </head>
    <body class="font-sans text-gray-900 antialiased">
      



        <div style="width: 80%; height: 300px; max-width: 600px; min-width: 200px; background-color: lightgreen; margin: 0 auto; padding: 20px; box-sizing: border-box;">
            
                {{ $slot }}
            
        
        </div>
        
       
    </body>
</html>
