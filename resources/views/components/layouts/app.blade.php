<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendible - {{ $title ?? 'Default' }} </title>
    <meta name="description" content="{{$metaDescription ?? 'default meta description'}}" />
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    {{-- <script src="/js/app.js"></script> --}}
    @vite([
        'resources/css/app.scss'
        ,'resources/js/app.js'
    ])
</head>
<body  class="antialiased bg-slate-100 dark:bg-slate-900" >
    {{-- @include('partials.navigation') --}}
    <x-layouts.navigation/>
     @if(session('status'))
    <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{ session('status')}}
    </div>
    @endif
    {{ $slot }}
</body>
</html>