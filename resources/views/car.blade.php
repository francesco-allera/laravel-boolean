@php $el = $cars[$id-1] @endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car #{{$id}}</title>
</head>
<body>

    <h1>This is the page of the car number {{$id}}</h1>

    <ul>
        <li>{{ $el->product }}</li>
        <li>{{ $el->model }}</li>
        <li>{{ $el->engine }}</li>
    </ul>

</body>
</html>