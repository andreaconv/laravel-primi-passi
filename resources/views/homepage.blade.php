<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@include('partials.style')


<body>
    @include('partials.header')
    <h1>Hello World</h1>
    <h2>Benvenuto {{ $name }} {{ $lastname }}</h2>

</body>
</html>
