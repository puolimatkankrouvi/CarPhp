<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1" >
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-6">
                <h1>Car list</h1>
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                        <li><a href="/phpSaitti/public/create">New car</a></li>
                        <li><a href="/phpSaitti/public/delete"> Delete car</a></li>
                    </ul>
                </nav>
                <form action="/public/index.php" method="post" name="remove_cars">
                    <ul>
                        {{csrf_field()}}
                      @foreach ($cars as $car)
                        {{--Concatetating the brand and model
                           Toyota Corolla, BMW M3  etc. --}}
                      <div>
                          <input type="radio" name="delete_this" value="{{$car->id}}">
                          <li class="delete">{{ ($car -> brand) . ' ' . ($car -> model) }}</li>
                             
                      </div>
                      @endforeach
                    </ul>
                    <input type="submit" value="Delete">
                </form>
                
                </div>
                
            </div>
        </div>
    </body>
</html>

