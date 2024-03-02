<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Это описание самого лучшего сайта, то есть - вашего сайта!">
    <meta name="keywords" content="Это ключевые слова для индексирования вашей страницы">
    <meta name="author" content="Мочалов Никита">
    <meta name="robots" content="index">
    <title>ART School Factory</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="{{ asset('/assets/style/arts.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script defer src="{{ asset('/assets/js/index.js') }}"></script>
</head>
<body>
{{-- Подключаем header инклуд --}}
@include('client.include.header')
<main>
    @yield('content')
</main>
@include('client.include.footer')
<!-- JAVASCRIPT FILES -->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->

</body>
</html>
