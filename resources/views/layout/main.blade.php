<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/bajibar">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/line-chart">Gatau dah</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"  href="/login">Login</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

    <div class="container mt-4">

   @yield('container')


    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
