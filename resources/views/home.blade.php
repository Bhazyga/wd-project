
@extends('layout.main')
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="CSS/app.css">


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+91fDPr8i5qXj5e5n5hLO9Ifz5Bq5F5I5tIV4Yg5k6G4w1Fa" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-eC2A3L6fP5R3pz5nPzz5wF5r5vVwwzXCp4Q5f8n5l5u5z5F5N5L5q5V5w5Z5H5f5B5v5" crossorigin="anonymous"></script>


@section('container')
<br>
    <h1>Halaman Utama</h1>
    <script>
        $(document).ready(function() {
        $('.carousel').carousel({
          interval: 3000
        });

        });
        $(document).ready(function() {

        if(window.location.href.indexOf('#modal-fullscreen') != -1) {
          $('#modal-fullscreen').modal('show');
        }

        });
        $(document).ready(function() {

        if(window.location.href.indexOf('#info') != -1) {
          $('#info').modal('show');
        }

        });
        $(document).ready(function() {
        $('.carousel').carousel1({
          interval: 2500
        });

        });
        $(document).ready(function() {

        if(window.location.href.indexOf('#modal-fullscreen') != -1) {
          $('#modal-fullscreen').modal('show');
        }

        });
        $(document).ready(function() {

        if(window.location.href.indexOf('#info') != -1) {
          $('#info').modal('show');
        }

        });
        </script>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 50%;height: 50%; position:relative; top:35;left:600">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/logo.png" width="100%" height="100%" alt="First slide ">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/gambar2.jpg" width="50%" height="100%" alt="Second slide ">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/distortimage.png" width="50%" height="100%" alt="Third slide ">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div id="myCarousel1" class="carousel slide" data-ride="carousel" style="width: 50%;height: 50%;position: relative;top:-335;right:0" >
        <ol class="carousel-indicators">
          <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel1" data-slide-to="1"></li>
          <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/distortimage.png" width="100%" height="100%" alt="First slide ">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/logo.png" width="50%" height="100%" alt="Second slide ">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/gambar2.jpg" width="50%" height="100%" alt="Third slide ">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      <br>
      <br>
      <br>
      <h1 style="position: relative; left:450">Pengumuman</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1><h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1>
      <h1>test</h1><h1>test</h1>


    @endsection

