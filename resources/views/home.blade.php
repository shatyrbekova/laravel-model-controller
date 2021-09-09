<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ( $allMovies as $movie )
            <a href="">
            <div class="col-4">
               <img src="{{ $movie ->cover}}" alt="">
               <h3>{{$movie ->title}}</h3> 
               <p>{{$movie ->abstract}}</p>
            </div>
           </a>
            @endforeach
            
        </div>
    </div>
</body>
</html>