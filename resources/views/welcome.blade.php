@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
   <div class="container-fluid background-img">
       <div class="row">
           <div class="col-md-3">
            <i class="fab fa-reddit fa-4x logos"></i>
           </div>
           <div class="col-md-6">
               <ul>
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
       <div class="row mt">
           <div class="col-md-12 col-sm-12">
             <p class="msg text-light">{{session('msg')}}</p>
            <h1>Headline Text</h1>
            <h3>Subtitle</h3>
            <p>Description</p>
            <a href="#" class="myButton">Learn More</a>
           </div>
       </div>
   </div>
<div class="container mt-5 bg-primary rounded">
    <div class="row">
        <div class="col-md-8">
            <h1>Call Us Anytime, Anywhere !</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, illo voluptate temporibus recusandae cum illum laborum ad ea! Laudantium dolores, vel suscipit praesentium rem repudiandae! Temporibus dolorum voluptatum dicta placeat.</p>
            <i class="fas fa-clipboard-check fa-5x"></i>
            <i class="fab fa-adn fa-5x"></i>
        </div>

        <div class="col-md-4">
            <img src="/images/image.jpg" alt="img" height="200px">
        </div>

    </div>
</div>
<div class="container mt-5 bg-primary rounded">
    <div class="row">
        <div class="col-md-8">
            <h1>You've got questions, We've got answers !</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, illo voluptate temporibus recusandae cum illum laborum ad ea! Laudantium dolores, vel suscipit praesentium rem repudiandae! Temporibus dolorum voluptatum dicta placeat.</p>
        </div>

        <div class="col-md-4">
            <img src="/images/image.jpg" alt="img" height="200px">
        </div>

    </div>
</div>
<div class="container mt-5">
    <center><h1>Services</h1></center>
<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/images/image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/images/image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/images/image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/images/image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/images/image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 22rem;">
            <img class="card-img-top" src="/images/image.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
</div>
</div>
<div class="container mt-5 bg-success rounded">
    <div class="row">
        <div class="col-md-8 mt-5">
                <h3>Headline Text</h3>
                <p>Description</p>
                <a href="#" class="myButton">Learn More</a>
        </div>

        <div class="col-md-4">
            <img src="/images/lemon.jpg" alt="img" height="200px">
        </div>

    </div>
</div>
<div  class="container my-5 ">
    <center><h1>Flexible prcing structure</h1>
        <h3>loeam ipsum hdwubb</h3></center>
    <div class="row">
        <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                        <center><div class="card-body">
                          <h2 class="card-title">Company Starter</h2>
                          <h2 class="card-title text-success">$7.95</h2>
                          <p>Per User - Per Month</p></center>
                          <h6 class="pl-4">Subscripton Breakdown</h6>
                          <p class="text-secondary pl-4">Australian Phone  Number</p>
                          <p class="text-secondary pl-4">User License</p>
                          <p class="text-secondary pl-4">Device License</p>
                          <p class="text-secondary pl-4">Device License</p>
                          <p class="text-secondary pl-4">Call Plan Subscription</p>
                </div>
                        <center><a href="#" class="myButton1 over rounded-circle">></a></center>
             </div>



       <div class="col-md-4">
            <div class="card" style="width: 22rem;">
                    <center><div class="card-body">
                      <h2 class="card-title">Company Starter</h2>
                      <h2 class="card-title text-success">$7.95</h2>
                      <p>Per User - Per Month</p></center>
                      <h6 class="pl-4">Subscripton Breakdown</h6>
                      <p class="text-secondary pl-4">Australian Phone  Number</p>
                      <p class="text-secondary pl-4">User License</p>
                      <p class="text-secondary pl-4">Device License</p>
                      <p class="text-secondary pl-4">Device License</p>
                      <p class="text-secondary pl-4">Call Plan Subscription</p>
            </div>
            <center><a href="#" class="myButton1 over rounded-circle">></a></center>
        </div>
        <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                        <center><div class="card-body">
                          <h2 class="card-title">Company Starter</h2>
                          <h2 class="card-title text-success">$7.95</h2>
                          <p>Per User - Per Month</p></center>
                          <h6 class="pl-4">Subscripton Breakdown</h6>
                          <p class="text-secondary pl-4">Australian Phone  Number</p>
                          <p class="text-secondary pl-4">User License</p>
                          <p class="text-secondary pl-4">Device License</p>
                          <p class="text-secondary pl-4">Device License</p>
                          <p class="text-secondary pl-4">Call Plan Subscription</p>
                </div>
                        <center><a href="#" class="myButton1 over rounded-circle">></a></center>

        </div>
    </div>
</div>
<div style="margin-top: 100px;" class="container">
    <center><h1>Recent News</h1>
    <h3>loeam ipsum hdwubb</h3></center>
<div class="row">
    <div class="col-md-6">
        <div class="card" style="width: 28rem;">
            <img class="card-img-top" src="/images/lemon.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
    <div class="col-md-6">
        <div>
        <div><img style="height: 180px; width: 180px; float: left;" src="/images/image.jpg" alt=""></div>
        <div>
            <p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum molestias, magnam nulla iure sequi sapiente quod eos nihil ut culpa praesentium doloremque earum repellendus vel voluptatum tempore ipsa eligendi velit?</p><br><br>
        </div>
        </div>
        <div style="margin-top: 30px;">
        <div><img style="height: 180px; width: 180px; float: left;" src="/images/image.jpg" alt=""></div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum molestias, magnam nulla iure sequi sapiente quod eos nihil ut culpa praesentium doloremque earum repellendus vel voluptatum tempore ipsa eligendi velit?</p>
        </div>
        </div>
    </div>
</div>
</div>

<div class="container mt-5 d2">
    <form class="pt-3">
        <div class="form-group">
          <label class="form-text text-light">Name</label>
          <input type="text" placeholder="Name"><br>
         </div>
        <div class="form-group">
          <label class="form-text text-light">Email</label>
          <input type="email" placeholder="Email"><br>
        </div>
        <div class="form-group">
            <label class="form-text text-light">Subject</label>
            <input type="text" placeholder="subject"><br>
          </div>
        <div class="form-group">
            <label class="form-text text-light">Message</label>
            <textarea cols="30" rows="3"></textarea><br><br>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<div class="container-fluid bg-dark mt-5">
    <div class="row mt-5">
        <div style="padding-top: 30px; padding-left: 100px;" class="col-6">
            <i class="fab fa-adn fa-4x logoss"></i><br><br>
            <p class="text-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sed laudantium id eum nemo vero minus at sit odit repellat, impedit iste adipisci. Repellendus obcaecati quis tempora dolorem, debitis voluptatum!</p>
        <h4 class="text-light">News Letter</h4>
        <p class="text-light">Don't forget to subscribe our news feed, kindly fill the form below</p>
        <input type="text">
        <button class="btn btn-success">Submit</button>
        <h4 class="text-light pt-5">Policy and Privacy | Terms and Conditions</h4>

        </div>
        <div style="text-align: right; padding-right: 100px; padding-top: 30px; padding-bottom: 30px;" class="col-6">
            <h3 class="text-light">Business Hours</h3>
            <h5 class="text-light">Opening Days:</h5>
            <h6 class="text-light">Monday-Friday:9AM-5PM</h6><br><br>
            <h6 class="text-light">vacations:</h6><br>
            <h6 class="text-light">All Sunday days <br>All Official Holidays</h6><br><br>
            <h4 class="text-light">@2020 All Rights Reserved</h4>
        </div>
    </div>
</div>
</body>
</html>
