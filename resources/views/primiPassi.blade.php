<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primiPassi</title>
</head>
<body>
    <h1> {{$numeroCasuale}} </h1>

    <ul>
        @foreach ($listaSpesa as $prodotto)
            <li>{{$prodotto}}</li>
        @endforeach
    </ul>
    
</body>
</html> 