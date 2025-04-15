@php
use Biscolab\ReCaptcha\Facades\ReCaptcha;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 検索用キーワード -->
    <meta name="keywords" content="japatour, japan tour, tokyo tour, japatour-official">
    <!-- robots設定 -->
    <meta name="robots" content="index,follow">
    <!-- OGP設定（SNSでシェアされた時の表示設定） -->
    <meta property="og:title" content="JapaTour">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://japatour-official.com/">
    <meta property="og:image" content="{{asset("img/logo3.svg")}}">
    @yield('style')
    <meta property="og:description" content="Discover the beauty of bespoke travel with us, where your dreams of perfect escapes turn into vivid realities filled with unforgettable memories.">
    <meta property="og:site_name" content="Japatour">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index_sp.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="shortcut icon" href="{{asset("img/logo3.svg")}}">
    <title>JapaTour</title>
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