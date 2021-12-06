<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .container {
        max-width: 500px;
    }

    dl, ol, ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    li.mini-avatar img {
        height: 30px;
        width: 30px;
        max-width: 30px;
        margin: 20px;
    }
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('fileUpload')}}">Upload File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('post')}}">View Files</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script type="text/javascript" src="{{asset('css/app.css')}}"></script>
</body>
</html>
