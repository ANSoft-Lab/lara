<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Финансы и страхование FINIST</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" type="image/png" href="/icon/favicon.png"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css-includes')
</head>
<body class="{{request()->path()}}">
<div id="app">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @include('modals.choose_city')
</div>
   @if(request()->path() === 'kis')
    <script src="{{mix('/js/app.js')}}"></script>
   @endif
    <script src="{{mix('/js/main.js')}}"></script>
   @if(request()->path() === 'affiliate')
    <script src="{{mix('/js/affiliate.js')}}"></script>
    <script src="{{mix('/js/affiliate-vendor.js')}}"></script>
   @endif
   @yield('js-includes')
</body>
</html>
