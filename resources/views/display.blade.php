<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Previous Comments</title>
</head>
<body>
    <h1>Previous Comments</h1>
    <ul>
        @foreach ($crud_app as $crud)
        <li>
            <h3> <?php echo 'Name:  '. $crud->name; ?> </h3>
            <p> <?php echo 'Comment:    '. $crud->comment; ?> </p>
        </li>
        @endforeach
    </ul>


    <br><br><br>
    <a href="/">Go to home</a>
</body>
</html>