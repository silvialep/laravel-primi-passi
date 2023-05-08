<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prima App Laravel</title>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box">
    <header style="height: 80px; background-color:aqua">
        <ul style="height: 100%; list-style-type: none; display: flex; gap: 40px; align-items: center; margin: 0;">
            @foreach($links as $link)
            <li><a style="color:darkblue; text-decoration:none; font-size: 1.3rem" href="/{{$link}}">{{$link}}</a></li>
            @endforeach
        </ul>
    </header>
    <main style="padding: 20px">
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