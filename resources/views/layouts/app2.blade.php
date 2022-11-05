<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="./assets/img/apple-icon.png"
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <link
        href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"
    />
</head>
<body class="text-gray-800 antialiased overflow-x-hidden">

<header>
    @include('layouts.header2')
</header>

@yield('content')

<footer class="relative bg-blue-900 pt-8 pb-6">
    @include('layouts.footer')
</footer>
<script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
</body>

</html>
