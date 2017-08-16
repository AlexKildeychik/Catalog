<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/catalog.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body style="padding-bottom: 100px;">
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;<li><a href="/catalog">All catalogs</a> </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->

<div class="container content">
<div class="col-md-12 products">
            <div class="row">
                <div class="col-md-12">
                    <div class="product">
    <div class="product-img">
        <a href="#"></a>
    </div>
    <p class="product-title">
        <a href="#">{{$catalog->title}}</a>
    </p>
    <p class="product-desc">{{$catalog->description}}.</p>
    <p class="product-price">{{$catalog->price}} gold</p>
    </div>
    </div>
    </div>
    </div>



</div>

<div class="container content">
    <div class="col-md-8-offset-2">
        @foreach($catalog->comments as $comment)
        @include('catalogs.comments')
        @endforeach
    </div>
</div>
@if (auth()->check())
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form method="post" action="{{$catalog->path() . '/comments'}}">
            {{csrf_field()}}
        <div class="form-group">
            <textarea name="body" id="body" class="form-control" placeholder="Comment me" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Post</button>
        </form>
    </div>
    @else
        <p class="text-center">Please <a href="{{route('login')}}">sign in</a> to participate in this discussion. </p>
    @endif
</div>
</body>