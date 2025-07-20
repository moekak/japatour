@php
use Biscolab\ReCaptcha\Facades\ReCaptcha;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShogunTours</title>
    <!-- 検索用キーワード -->
    <meta name="keywords" content="ShogunTours, ShogunTours-official, Japan tour, tokyo tour, Tokyo travel, Kyoto experience, Osaka trip, Japanese culture, foreign tourist guide, Japan travel package, Mt. Fuji tour, onsen experience, Japan sightseeing">
    <!-- robots設定 -->
    <!-- カノニカルURL設定 -->
    <meta rel="canonical" href="https://shoguntoursjapan.com/">
    <meta name="robots" content="index,follow">
    <!-- OGP設定（SNSでシェアされた時の表示設定） -->
    <meta property="og:title" content="ShogunTours">
    <meta property="og:type" content="website">
    <meta name="description" content="Specialized travel service for international tourists visiting Japan. We offer multilingual tours exploring Tokyo, Kyoto, Osaka and beyond. Let us guide you through traditional cultural experiences to cutting-edge technology, supporting you in discovering all of Japan's wonders.">
    <meta property="og:url" content="https://shoguntoursjapan.com/">
    <meta property="og:image" content="{{asset("img/logo3.svg")}}">
    <meta property="og:site_name" content="ShogunTours">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index_sp.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="shortcut icon" href="{{asset("img/logo3.svg")}}">
        @yield('style')
</head>
<body>
    <div class="bg hidden"></div>
    @yield('main')
    @include('components.footer')
    @yield('script')
<script>
</script>
</body>
</html>