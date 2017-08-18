
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/catalog.css') }}" rel="stylesheet">
    <title>Каталог</title>
</head>
<body>
@include('layouts.app')
            <div class="container">
            <div class="row">
                @foreach($catalogs as $catalog)
                <div class="col-md-3">
                    <div class="product">
                            <p class="product-title">
                                <a href="{{$catalog->path()}}">{{$catalog->title}}</a>
                            </p>
                            <p class="product-desc">{{$catalog->description}}.</p>
                            <p class="product-price">{{$catalog->price}} chaos</p>
                    </div>
            </div>
                @endforeach
            </div>
            </div>
</body>
</html>
