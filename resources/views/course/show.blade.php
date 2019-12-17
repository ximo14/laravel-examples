<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Student with Id {{ $course->id }}:
    <ul>
    <li>Name {{ $course->name }}</li>
    <li>Created date {{ $course->created_at }}</li>
    </ul>
</body>
</html>