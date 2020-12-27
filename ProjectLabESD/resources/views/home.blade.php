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
                font-size: 84px;
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
    <br>
    <h2>Popular Brand</h2>
    <br>
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://www.stadiumgoods.com/media/catalog/product/5/5/555088_610_1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title">Jordan 1 Retro High "Bred Toe"</h2>
        <a href="/product" class="btn btn-success">Sell</a>
        <a href="/history" class="btn btn-info">Read</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.stadiumgoods.com/cdn-cgi/image/fit=contain,format=auto,width=720/media/catalog/product/F/W/FW3043_1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title">Yeezy Boost 350 V2 "Cloud White"</h2>
        <a href="/product" class="btn btn-success">Sell</a>
        <a href="/history" class="btn btn-info">Read</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.stadiumgoods.com/media/catalog/product/5/5/555088-105_1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title">Air Jordan 1 Retro High OG "Dark Mocha" </h2>
        <a href="/product" class="btn btn-success">Sell</a>
        <a href="/history" class="btn btn-info">Read</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://i.pinimg.com/originals/28/48/9d/28489dce68d98cfb51d722dedeadc90f.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title">Nike Air Yeezy 2 NRG "Solar Red" </h2>
        <a href="/product" class="btn btn-success">Sell</a>
        <a href="/history" class="btn btn-info">Read</a>
      </div>
    </div>
  </div>
</div>
    </body>
</html>
