<?php 
session_start();
$name = $_SESSION['login_user'] ?? "login";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>First Page</title>
  </head>



  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-dark  pl-5 pr-5">

  <a class="navbar-brand" href="index.php">Good Foods</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item active">
        <a class="nav-link text-bold  px-5" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item">

      
        <!-- condition for displaying login or dashboard page  -->
        <?php 
        if($name == 'login'){
          echo "<a href='./user.php' class='btn btn-warning'> $name </a>";
        } 
        else{
          echo "<a href='./user.php' class='btn btn-warning'> $name </a>";
        }
        ?>
        <!-- end condition -->

      </li>
    </ul>
    <form class="d-flex">
    </form>
  </div>
</nav>

<!-- end  -->

