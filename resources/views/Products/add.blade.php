<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fligno</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<!----------------------------------------------------------->

    <body class="antialiased">

    <div class="container">
        <form method="POST" action="{{url('store')}}">
            @csrf
        <div class="form-group">
            <label for="exampleInput">Product Name</label>
            <input type="text" class="form-control" name="product">
        </div>

        <div class="form-group">
            <label for="exampleInput">Price</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="form-group">
            <label for="exampleInput">Brand</label>
            <select class="form-control" name="brand">
                <option value='' disabled>Please choose or select Brand</option>
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
</html>
