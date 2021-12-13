<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Финансы и страхование FINIST</title>
    @if(request()->path() !== 'affiliate')
        <link rel="stylesheet" type="text/css" href="{{mix('/css/style.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href='/new/css/fonts.css'>
        <link rel="stylesheet" type="text/css" href='/new/css/normalize.css'>
        <link rel="stylesheet" type="text/css" href='/new/css/style.min.css?ver=2.1'>
    @endif
    <link rel="icon" type="image/png" href="/icon/favicon.png"/>
    @yield('extra_styles')
</head>
<body class="{{request()->path()}}">
@if(request()->path() !== 'affiliate')
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
@else
    @yield('content')
@endif
@yield('extra_js')
</body>
</html>
