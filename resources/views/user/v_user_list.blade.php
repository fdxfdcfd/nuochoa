<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Danh sách người dùng</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Danh sách người dùng</h1>
        <ul>
            <li>
            @foreach ($userlist as $user)
                <p>Ten {{ $user['name'] }}</p>
            @endforeach
            </li>
        </ul>
    </body>
</html>