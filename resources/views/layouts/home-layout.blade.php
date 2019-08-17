<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/override.css') }}" rel="stylesheet">
    <title>@yield('title')</title>

    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('assets/nav-icon.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        /r/ProgrammerHumor
    </a>
    <a class="btn btn-primary" href="/image" role="button">Image</a>
    </nav>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html