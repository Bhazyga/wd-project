<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>

    <title>WD Project</title>
  </head>
  <style>
    body{
        background-color: #DDDDDD;
    }
    .navbar{
        background-color: #F05454;
    }


</style>
  <body ">

<nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="/"> <img src="img/wd.jpg" alt="hah??" width="50" height="50" class="rounded-circle" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($navlink === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($navlink === "about") ? 'active' : '' }} " href="/bajijago">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/bajiblog">Visi Dan Misi</a>
        <li class="nav-item">
            <a class="nav-link {{ ($navlink === "login") ? 'active' : '' }}" href="/login">Login</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('container')
</div>

<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  </body>


</html>

