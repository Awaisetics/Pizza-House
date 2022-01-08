@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
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
                    <li class="li"><a class="text-light" href="//index/create">Order Pizza</a></li>
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

    <div class="wrapper">
      <h1>Order a new Pizza</h1>
    </div>
    <form class="" action="/index" method="post">
      @csrf
      <label for="name">Your Name</label>
      <input type="text" name="name"><br>
      <label for="type">Choose Pizza Type</label>
      <select name="type" id="type">
        <option value="huwain">huwain</option>
        <option value="margarita">margarita</option>
        <option value="veg supreme">veg supreme</option>
        <option value="volcano">volcano</option>
      </select><br>
      <label for="type">Choose Pizza Base</label>
      <select name="base" id="base">
        <option value="cheesy crust">cheesy crust</option>
        <option value="garlic crust">garlic crust</option>
        <option value="thin and crispy">thin and crispy</option>
        <option value="thick">thick</option>
      </select><br>

      <fieldset>
        <p>Extra Toppings</p><br>
        <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br>
        <input type="checkbox" name="toppings[]" value="Pepper">Pepper<br>
        <input type="checkbox" name="toppings[]" value="Garlic">Garlic<br>
        <input type="checkbox" name="toppings[]" value="Olives">Olives<br>
      </fieldset>
      <input type="submit" name="" value="order pizza">
    </form>

  </body>
</html>
