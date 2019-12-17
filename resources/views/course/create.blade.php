<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create form</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('course.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="">

        <label for="teacher">Teacher:</label>
        <input type="text" name="teacher" id="">

        <button type="submit">Create</button>
    </form>
</body>
</html>