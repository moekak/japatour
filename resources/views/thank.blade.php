<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/thank.css') }}">
    <title>JapaTour</title>
</head>
<body>
    <div class="diagonal-background">
        <div class="content">
            <img src="{{asset("img/icons8-check-60.png")}}" alt="">
            <h2>Thank you!</h2>
            <p>We have received your inquiry and will get back to you within 24-48 business hours. <br>While you wait, why not explore some of our popular tours?</p>
            <a href="{{route("home")}}">→ back to top page</a>
        </div>
    </div>
</body>
</html>