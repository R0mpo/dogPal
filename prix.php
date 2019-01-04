<?php
// Initialize the session
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>dogpal.fr</title>
</head>

<body>
  <!-- Barre de navigation -->
  <?php
    require "header.php";
   ?>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Prix</h1>
    <p class="lead">Profitez de nos prix dégressifs pour la promenade de votre chien.</p>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Unitaire</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">10€ <small class="text-muted">pour chaque promenade</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Durée de 45 minutes</li>
            <li>Dans votre quartier</li>
            <li>Chien déposé chez vous</li>
            <li>Satisfait ou remboursé</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">C'est partit !</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">80€ <small class="text-muted">/ 10 promenades</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Durée de 45 minutes</li>
            <li>Dans votre quartier</li>
            <li>Chien déposé chez vous</li>
            <li>Satisfait ou remboursé</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Je me lance !</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Diamant</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">150€ <small class="text-muted">/ 20 promenades</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Durée de 45 minutes</li>
            <li>Dans votre quartier</li>
            <li>Chien déposé chez vous</li>
            <li>Satisfait ou remboursé</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Je me lance !</button>
        </div>
      </div>
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

  <!-- Bootstrap : jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>
