<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prima App Laravel</title>

    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>
<body>
    <header>
        <ul>
            @foreach($links as $link)
            <li><a href="{{route($link)}}">{{$link}}</a></li>
            @endforeach
        </ul>
    </header>
    <main>
        <h1>HELLO WORLD</h1>
        <span>
            {{$one}}
        </span>
        <span>
            {{$two}}
        </span>

    </main>
</body>
</html>