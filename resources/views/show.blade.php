@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <title></title>
    <style media="screen">
.li{
  display: inline;
  text-decoration: none;
  padding-left: 4rem;
}
.logos {
  padding-left: 4rem;
}
.logoss {
  padding-left: 4rem;
}
  </style>
  </head>
  <body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-3">
             <i class="fab fa-reddit fa-4x logos"></i>
            </div>
            <div class="col-md-6">

                <ul class="mt-2">
                    <li class="li" style="padding-left: 1.4rem;"><a class="text-light" href="/">Home</a></li>
                    <li class="li"><a class="text-light" href="/index">Pizzas</a></li>
                    <li class="li"><a class="text-light" href="/show/1">Find a Pizza</a></li>
                    <li class="li"><a class="text-light" href="/index/create">Order Pizza</a></li>
                    <li class="li"><a class="text-light" href="#">Blog</a></li>
                </ul>

             </div>
             <div class="col-md-3 col-sm-3">
                 <i class="fab fa-adn fa-2x logoss"></i>
                 <i class="fas fa-clipboard-check fa-2x logoss"></i>
                 <i class="fab fa-adn fa-2x logoss"></i>
             </div>
        </div>

    </div>
  <h1 class="mt-5">Order for {{$pizza->name}}</h1>
          <p>Type  -  {{$pizza->type}}</p>
          <p>Base  -  {{$pizza->base}}</p><br>
          <p>Toppings</p><br>
          <ul>
            @foreach ($pizza->toppings as $top)
            <li>{{$top}}</li>
            @endforeach
          </ul><br>

          <form action="/show/{{$pizza->id}}" method="post">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
          </form>
    <div>

    </div>
  </body>
</html>
