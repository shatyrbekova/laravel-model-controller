<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./css/style.css"></script>
</head>
<body>
    <div class="container">
     
            @foreach ( $allMovies as $movie )
            
            <div class="box-movie">
            <a href="">
                <div class="img-box">
                    <img src="{{ $movie ->cover}}" alt="">
                </div>
                <div class="information-box">
                    <h2>{{$movie ->title}}</h3> 
                    <h4>{{$movie ->original_title}}</h4> 
                    <div>{{$movie ->nationality}}</div>
                    <p>{{$movie ->abstract}}</p>
                    <h3>€ {{$movie ->price}}</h3>

                </div>
               
            </a>
            </div>
           
            @endforeach
            

    </div>

    <style>

    body{
        background-color: bisque;
    }

    .container{
     width:1200px;
     margin:0 auto;
     display: flex;
          flex-direction:row;
       
    }
    .box-movie{
          padding: 10px;
          height: 400px;
          width: 200px;
         

    }
    .box-movie img{
        width:100%;
    }

    a{
        text-decoration: none;
        color:black;
    }
    </style>
</body>
</html>