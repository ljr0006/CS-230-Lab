<?php
require "includes/header.php"
?>

<main>

  <link rel="stylesheet" href="css/login.css">

  <div class="bg-cover">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide col-lg-2 offset-lg-5" data-ride="carousel" style="padding-top: 40px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/Carousel1.jpg" class="d-block w-100 mx-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Images/Carousel2.jpg" class="d-block w-100 mx-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Images/Carousel3.jpg" class="d-block w-100 mx-auto" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="h-40 center-me">
      <div class="my-auto">
        <form class="form-signin" action="includes/login-helper.php" method="POST">
          <img src="Images/AvengersLogo.png" style="width: 100px;" alt="">
          <h1 class="h3 mb-3 font-weight-normal" style="padding: 15px;">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Username or Email Address</label>
          <input type="text" name= "uname" id="inputEmail" class="form-control" placeholder="Username / Email" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3" style="text-align: left;">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-lg btn-outline-dark btn-block" name="login-submit" type="submit">Sign in</button>
            <div class="text-center" style="margin: 20px;">
              Don't have an account? <a href="signup.php"> Sign-up</a>
            </div>
            <p class="mt-3 mb-2 text-muted" style="text-align: center;">&copy; 2020-2021</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>