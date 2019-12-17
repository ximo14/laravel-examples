<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Flight with Id {{ $flight->id }}:
    <ul>
    <li>Name {{ $flight->name }}</li>
    <li>Airline {{ $flight->airline }}</li>
    <li>Created date {{ $flight->created_at }}</li>
    </ul>
</body>
</html>