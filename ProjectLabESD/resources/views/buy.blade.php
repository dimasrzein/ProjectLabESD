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
                    <a href="/buy">Buy</a>
                    <a href="/product">Sell</a>
                    <a href="/order">Order</a>
                    <a href="/history">Article</a>
                </div>
<br>

   <div class="container">
        <div class="row">
          <div class="col">
            <form action="Mybooking.php" method="post">
              <div class="form row"> 
              <div class="col-md-9">
                    <label for="nama">Name</label>
                    <input type="name" class="form-control" name="nama">
              </div>
              </div>
              <div class="form row"> 
              <div class="col-md-9">
                    <label for="tanggal">Check-in</label>
                    <input class="form-control" type="date" name="tanggal">
              </div>
              </div>
              <div class="form row"> 
              <div class="col-md-9">
                    <label for="durasi">Duration</label>
                    <input type="duration" class="form-control" name="durasi">
                    <small class="form-text text-muted">Day(s)</small>
              </div>
              </div>
              <div class="form row">
              <div class="col-md-9">
                <label for="tipe">Room Type</label>
                    <select class="custom-select my-1 mr-sm-2" name="tipe">
                    <option value ="Standard">Standard</option>
                    <option value="Superior">Superior</option>
                    <option value="Luxury">Luxury</option>
              </select>
              </div>
              </div>
              <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Add Service(s)</label>
                            <div class="col-sm-12">
                                <small id="days" class="form-text text-muted">$20 / Service)</small>
                                <input type="checkbox" name="services[]" value="Room Service"> Room Services <br>
                                <input type="checkbox" name="services[]" value="Breakfast"> Breakfast <br>
                                </fieldset>
                            </div>
                        </div>
               <br>
              <div class="form row"> 
              <div class="col-md-9">
                    <label for="phone">Phone Number</label>
                    <input type="phone" class="form-control" name="phone">
              </div>
              </div>
              <div class="form row"> 
              <div class="col-md-9">
<br>              
              <button type="submit" value="kirim" class="btn btn-primary btn-block" >Book</button>

              </div>
              </div>
            </form>
            </div>
            <div class="col">
          <img src="Standard.jpg" class="card-img-top" alt="" >
           </div>
          </div>
        </div>
      </div>
  

</body>
</html>