<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 6.0 Kode</title>
</head>
<body>
    <p>Halaman : {{ $page }} </p><br>

    <p>Hobby ku: </p>
    <ul>
        @foreach ($array as $hobby)
            <li> {{$hobby}} </li>
        @endforeach
    </ul>
</body>
</html>
