<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Student with Id {{ $student->id }}:
    <ul>
    <li>Name {{ $student->name }}</li>
    <li>Course {{ $student->course }}</li>
    <li>Created date {{ $student->created_at }}</li>
    </ul>
</body>
</html>