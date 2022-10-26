<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updating</title>
</head>
<body>
    <h1>UPDATE YOUR COMMENT</h1>

    <form action="/new" method="POST">
        @csrf


        <input type="hidden" value="{{$crud_app->id}}" name="id">
        <label for="name">Enter New Name: </label>
        <input type="text" name="name" placeholder="Name" value="{{$crud_app->name}}"  required>
        <br>

        <label for="comment">Enter New Comment: </label>
        <input type="text" name="comment" placeholder="Comment" value="{{$crud_app->comment}}"  required>
        <br>

        <input type="submit" value="Update">
    </form>
</body>
</html>