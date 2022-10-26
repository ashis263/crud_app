<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD APP</title>
</head>
<body>
    <h1>POST YOUR COMMENT</h1>

    <form action="/submit" method="POST">
        @csrf

        <label for="name">Enter Your Name: </label>
        <input type="text" name="name" placeholder="Name" required>
        <br>

        <label for="comment">Enter Your Comment: </label>
        <input type="textarea" name="comment" placeholder="Comment" required>
        <br>

        <input type="submit" value="Submit">
    </form>

    <br><br><br>
    <a href="/display">See previous comments</a>
</body>
</html>