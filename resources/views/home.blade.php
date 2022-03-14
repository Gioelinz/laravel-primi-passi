<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Questa è la home, Hello Laravel!</h1>
    <ul>
        @foreach ($hello as $item)
           <li>{{ $item }}</li>
        @endforeach
    </ul>

    <a href="{{route('hello')}}">Go to Hello</a>
</body>
</html>