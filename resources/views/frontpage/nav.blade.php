<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Font Awesome -->

</head>

<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav pull-right">

                @if (Auth::guest())
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>