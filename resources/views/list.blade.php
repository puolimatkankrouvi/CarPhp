<!doctype html>

<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <ul>
                  @foreach ($cars as $car)
                    {{--Concatetating the brand and model
                       Toyota Corolla, BMW M3  etc. --}}
                    <li>{{ ($car -> brand) . ' ' . ($car -> model) }}</li>
                  @endforeach
                </ul>
                
                </div>
                
            </div>
        </div>
    </body>
</html>

