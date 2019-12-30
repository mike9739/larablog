<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1>Hola Mundo {!!"$nombre "!!} </h1>

@foreach ($posts as $post)

@if ($loop->first)
    Primero

@endif

<li>{{$post}}</li>
@endforeach


</body>
</html>
