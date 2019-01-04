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
  <!-- On appelle le header via une requete php -->
  <?php
    require "header.php";
   ?>

  <div class="wrapper">
    <div class="inner">
      <div class="content">
        <h2 class="wow fadeInDown" data-wow-delay="1s">Votre meilleur partenaire promenades !</h2>
        <a href="register.php" class="btn btn-primary" role="button">Je m'inscrit</a>
      </div>
    </div>
  </div>

  <!-- Trois blocs horizontaux avec trois arguments de vente -->
  <div class="container" id="argumentVente">
    <div class="row centered">
      <div class="col-md-4 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">
        <div class="thumbnail"><img src="medias/dog.png" alt="Thumbnail Image 1">
          <div class="caption">
            <h3>Partenaire Confiance</h3>
            <p>Confiez votre animal de compagnie aux meilleurs des promeneurs de votre ville. Tous nos premeneurs sont sont responsable de vos amis les animaux et nous nous engageons à vous fournir la meilleur prestation immaginable.</p>
            <p><a href="register.php" class="btn btn-primary" role="button">Je test</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
        <div class="thumbnail"><img src="medias/bone.png" alt="Thumbnail Image 1">
          <div class="caption">
            <h3>Equipe Professionelle</h3>
            <p>Une équipe de professionnels habitués vous garantissent un service de qualité. Nos promeneurs sont des habitués du métier et cela fait longtemps que nous travaillons en partenariat avec eux.</p>
            <p><a href="register.php" class="btn btn-primary" role="button">Je test</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
        <div class="thumbnail"><img src="medias/pawprint.png" alt="Thumbnail Image 1">
          <div class="caption">
            <h3>Assurance Bonheur</h3>
            <p>Retrouvez votre chien plus heureux que jamais. Il vous retrouvera souriant, après avoir pu dépenser toute son énergie en compagnie d'autres chiens de sa taille. Dogpal est votre partenaire promenades.</p>
            <p><a href="register.php" class="btn btn-primary" role="button">Je test</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Partie avec les commentaires des utilisateurs -->
  <div class="container-fluid" id="containerBlanc">
    <div class="container lowLight" id="avis">
      <div class="row">
        <div class="col-md-12">
          <h2 id="testiTitle">Ce que nos <b>clients</b> en disent :</h2>
          <div id="myCarousel avis" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="item carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left d-flex mr-3">
                        <a href="#">
                          <img src="medias/testi1.jpeg" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="testimonial">
                          <p>Balto est devenu beaucoup plus heureux qu'avant. Il a retrouvé la forme grâce à de longue ballade hebdomadaires. Merci pour tout !</p>
                          <p class="overview"><b>Robert Jhon</b>, maître de Balto</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left d-flex mr-3">
                        <a href="#">
                          <img src="medias/testi2.jpeg" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="testimonial">
                          <p>J'ai découvert doogpal il y a 1 an et je ne peut plus m'en passer. Et mon chien Orion non plus. 3 ballades par semaines avec ses copains et nous on gagne en tranquilité à la maison.</p>
                          <p class="overview"><b>Natalia Koukiska</b>, maîtresse d'Orion</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item carousel-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left d-flex mr-3">
                        <a href="#">
                          <img src="medias/testi3.jpeg" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="testimonial">
                          <p>Chimney est plus heureuse que jamais. Et moi, je n'ai plus besoin de me forcer lorsque je n'ai pas l'envie ou le temps de faire une grnade promenade.</p>
                          <p class="overview"><b>Jessica Malton</b>, maîtresse de Chimney</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left d-flex mr-3">
                        <a href="#">
                          <img src="medias/testi4.jpeg" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="testimonial">
                          <p>J'adore dogpal. Merci pour toutes ces journées de bonheur passées à promener des chiens adorables. Je retravaillerais pour vous.</p>
                          <p class="overview"><b>Mary Saveley</b>, mâitresse de Mickel</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer avec liens de navigation Pied de Page -->
  <footer>
    <div class="container centered">
      <div class="row" id="piedPage">
        <div class="col-md-6" id="piedPageGauche">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="prix.html">Tarifs</a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/I11bPV4pgEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap : jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>
