<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
    <title>Boolpress</title>
</head>
<body>
    <header>
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('home') }}">
                    Boolpress
                </a>
            </div>
            <div class="navbar-end">
                <a class="navbar-item" href="{{ route('users.index') }}">
                    Users
                </a>
                <a class="navbar-item" href="{{ route('posts.index') }}">
                    Blog archive
                </a>
                <a class="navbar-item" href="{{ route('posts.create') }}">
                    Create a new Post
                </a>
            </div>
        </nav>
    </header>