<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Финансы и страхование FINIST</title>
    <link rel="stylesheet" type="text/css" href="{{mix('/css/style.css')}}">
    <link rel="icon" type="image/png" href="/icon/favicon.png"/>
</head>
<body>
<div id="app">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @include('modals.choose_city')
</div>
    <script src="{{mix('/js/main.js')}}"></script>
   @if(request()->path() === 'kis')
    <script src="{{mix('/js/app.js')}}"></script>
   @endif
</body>
</html>
