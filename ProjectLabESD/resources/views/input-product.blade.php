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
    <ul>
        
    </ul>
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
                <div class="content title m-b-md">
                    Input Product
                </div>
                <form action="{{url('input')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group col-md-8">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="harga">Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$ USD</div>
                            </div>
                            <input type="price" class="form-control" name="price">
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="deskripsi">Description</label>
                        <textarea type="textarea" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="stok">Stock</label>
                        <input type="text" class="form-control" name="stock">
                    </div>
                    <div class="form-group col">
                        <label for="image-input">Image file input</label>
                        <input type="file" class="form-control-file" name="image" name="image">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </span>
        </div>
    </body>
</html>
