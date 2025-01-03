<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid text-center">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="{{ route('posts') }}">Main</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 mt-1" href="#">My profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 mt-1" href="#">Subscribes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 mt-1" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 mt-1" href="{{ route('admin.post.index') }}">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
