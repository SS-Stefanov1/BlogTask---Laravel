<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/BlogTask/public/">Return to Home Page</a>
                </li>
                <p>
                @if( auth()->check() )
                Logged as <a class="nav-link" href="#">{{ auth()->user()->name }}</a>!
                <li class="nav-item">
                    <a class="nav-link" href="./logout">Log Out</a>
                </li>
                @else
                    <p>You're not logged in.</p>
                @endif
                </p>
            </ul>
        </div>
    </nav>

    <div class="container" class="blue">
        @yield('content')
    </div>

    <script src="/js/jquery-3.1.1.slim.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
