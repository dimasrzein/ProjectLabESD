<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="flex-top content">
                <div class="links">
                <h1>ShoesX</h1>
                    <a href="/">Home</a>
                    <a href="/product">Sell</a>
                    <a href="/order">Order</a>
                    <a href="/history">Article</a>      
                </div>
     <br>
                 <h2>Your Product List</h2>
     <br> 
            </div>
            <br>
            @if(count($product)>0)
            @foreach($product as $p)
            <div class="card" style="width: 18rem;">
                <img src="{{url('/images/'.$p->img_path)}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$p->name}}</h5>
                    <p class="card-text">{{$p->description}}</p>
                    <h3 class="card-title">${{$p->price}}.00</h3>
                </div>
            </div>

            @endforeach
            @else
            <a href="{{url('/input-product')}}"><button class="btn btn-dark">Your Product</button></a>
            @endif
        </div>
    </body>
</html>
