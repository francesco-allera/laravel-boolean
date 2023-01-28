<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Project</title>
</head>
<body>
    <ul>
        @foreach ($cars as $k => $v)
        <li>
            {{ $v->id }}:
            {{ $v->product }}
            {{ $v->model }}
            {{ $v->engine }}
        </li>
        @endforeach
    </ul>
</body>
</html>