<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="../css/signup.css">

</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><Img src="Images/AvengersLogo.png" style="height: 35px; width: 35px;"></Img> The Avengers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item active">
          <a class="nav-link" href="about.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            The Team
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ant-Man</a>
            <a class="dropdown-item" href="#">Black Panther</a>
            <a class="dropdown-item" href="#">Black Widow</a>
            <a class="dropdown-item" href="#">Captain America</a>
            <a class="dropdown-item" href="#">Captain Marvel</a>
            <a class="dropdown-item" href="#">Doctor Strange</a>
            <a class="dropdown-item" href="#">Falcon</a>
            <a class="dropdown-item" href="#">Gamora</a>
            <a class="dropdown-item" href="#">Groot</a>
            <a class="dropdown-item" href="#">Hawkeye</a>
            <a class="dropdown-item" href="#">Iron Man</a>
            <a class="dropdown-item" href="#">Iron Patriot</a>
            <a class="dropdown-item" href="#">Hulk</a>
            <a class="dropdown-item" href="#">Nebula</a>
            <a class="dropdown-item" href="#">Nick Fury</a>
            <a class="dropdown-item" href="#">Spider Man</a>
            <a class="dropdown-item" href="#">Star-Lord</a>
            <a class="dropdown-item" href="#">Thor</a>
            <a class="dropdown-item" href="#">Vision</a>
            <a class="dropdown-item" href="#">Wasp</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Villians</a>
          </div>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto mr-sm-2">
        <?php
            if (!isset($_SESSION['uid'])) {
                echo '<li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>';
            } else {
                echo '<li class="nav-item">
                <a class="nav-link" href="includes/logout.php">Logout</a>
                </li>';
         }
        ?>
      </ul>
        <input class="form-control my-2 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>

    </div>
  </nav>
</header>