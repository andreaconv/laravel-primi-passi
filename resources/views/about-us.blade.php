<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    body{
        background-color: #1a1a1a;
        color: white;
    }
</style>
<body>
    @include('partials.header')
    <h1>Chi siamo</h1>
    <h2>Siamo {{ $name }} {{ $lastname }}</h2>
</body>
</html>