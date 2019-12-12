<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create user</title>
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
    <form action="{{ route('user.store') }}" method="post">
    @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="">

        <button type="submit">Create</button>

    </form>
</body>
</html>