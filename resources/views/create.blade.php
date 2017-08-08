<!doctype html>

<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    </head>
    
    <body>
        <div class="container">
            
            <div class="row">
                    <form action="/" method="post" name="create_car">
                        {{ csrf_field() }}
                        <fieldset>
                            <label for="brand">Brand:</label>
                            <input type="text" id="brand" name="brand" placeholder="Enter car brand" autofocus/>
                            <br />
                            <label for="model">Model:</label>
                            <input type="text" id="model" name="model" placeholder="Enter car model" />
                            <br />
                            <input type="submit" value="Create Car" />
                    </fieldset>
                    </form>
            </div>
        </div>
    </body>
</html>

