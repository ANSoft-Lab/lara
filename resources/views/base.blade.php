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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(13262362, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/13262362" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>