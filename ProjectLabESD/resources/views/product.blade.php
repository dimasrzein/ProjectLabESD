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
        <div class="flex-top position-ref full-height">
            <div class="content">
                <div class="links">
                <h1>ShoesX</h1>
                    <a href="/">Home</a>
                    <a href="/product">Sell</a>
                    <a href="/order">Order</a>
                    <a href="/history">Article</a>
                </div>
            </div>
            <br>
            
            <div class="card text-center">
        <div class="card-header">Sell Your Shoes</div>
    <div class="card-body">
    <h5 class="card-title">Fill the Portfolio</h5>
    
    @if(count($product)>0)
            <a href="{{url('/input-product')}}"><button class="btn btn-dark">Add Product</button></a>
  </div>
</div>

            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($product as $index=>$p)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{ $p->name }}</td>
                        <td>${{ $p->price }}.00</td>
                        <td><a href="{{url('/update-product/'.$p->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="{{url('/delete-product/'.$p->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
            <div class="container">
            <div class="row">
            <div class="col-sm-6"></div>
            
            <a href="{{url('/input-product')}}"><button class="btn btn-dark">Add Product</button></a>
            @endif
        </div>
    </body>
</html>
