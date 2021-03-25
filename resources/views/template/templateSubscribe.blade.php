<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:green; border:solid 1px orange; text-align:center;">Hello {{$infos->name}}</h1>
    <div style="text-align: center; margin-top: 2vh; background-color:lightblue;">
        <p style="color: blanchedalmond;">You're now subscribe in our website. Here's a recap of your infos:</p>
        <p style="color: blanchedalmond;">User name: {{$infos->name}}</p>
        <p style="color: blanchedalmond;">Email: {{$infos->email}}</p>
        <p style="color: blanchedalmond;">Password: {{$infos->password}}</p>
        <p style="color: blanchedalmond;">Welcome to you!</p>
    </div>
</body>
</html>