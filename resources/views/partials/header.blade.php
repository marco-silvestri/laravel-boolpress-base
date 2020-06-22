<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolpress</title>
</head>
<body>
    <header>
        <h1>What a wonderful blog!</h1>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
        </ul>
    </header>