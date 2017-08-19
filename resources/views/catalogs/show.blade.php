@include('layouts.app')
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/catalog.css') }}" rel="stylesheet">
</head>
<body style="padding-bottom: 100px;">


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