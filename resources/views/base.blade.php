<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Финансы и страхование FINIST</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" type="image/png" href="/icon/favicon.png"/>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @include('modals.choose_city')
    <script src="/js/app.js"></script>
</body>
</html>
