<?php
// Initioalisation de la session
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />  <!-- Bootstrap CSS -->
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
                <?php  
        if (isset($_SESSION["loggedin"])){
          $usuName = htmlspecialchars($_SESSION["username"]);
          echo '<a href="createMission.php" class="btn btn-primary" role="button">Poster une annonce</a>';
        }else {
          echo '<a href="register.php" class="btn btn-primary" role="button">S\'inscrire</a>';
        }
        ?> 
      </div>
    </div>
  </div>

  <!-- Trois blocs horizontaux avec trois arguments de vente -->
  <div class="container mt-4 mb-4" id="argumentVente">
    <div class="row centered mt-3 mb-3">
      <div class="col-md-4 wow bounceInRight" data-wow-duration="1s" data-wow-delay="1s">
        <div class="thumbnail"><img src="medias/dog.png" class="mt-3" alt="Thumbnail Image 1">
          <div class="caption mt-3">
            <h3>Partenaire Confiance</h3>
            <p>Confiez votre animal de compagnie aux meilleurs des promeneurs de votre ville. Tous nos premeneurs sont responsables de vos amis les animaux et nous nous engageons à vous fournir la meilleure prestation imaginable.</p>
            <p><?php if (isset($_SESSION["loggedin"])){
          $usuName = htmlspecialchars($_SESSION["username"]);
          echo '<a href="createMission.php" class="btn btn-primary" role="button">Poster une annonce</a>';

        }else {
          echo '<a href="register.php" class="btn btn-primary" role="button">S\'inscrire</a>';
        }
        ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
        <div class="thumbnail"><img src="medias/bone.png" class="mt-3" alt="Thumbnail Image 1">
          <div class="caption mt-3">
            <h3>Equipe Professionelle</h3>
            <p>Une équipe de professionnels habitués vous garantit un service de qualité. Nos promeneurs sont des habitués du métier et cela fait longtemps que nous travaillons en partenariat avec eux.</p>
            <?php if (isset($_SESSION["loggedin"])){
          $usuName = htmlspecialchars($_SESSION["username"]);
          echo '<a href="createMission.php" class="btn btn-primary" role="button">Poster une annonce</a>';

        }else {
          echo '<a href="register.php" class="btn btn-primary" role="button">S\'inscrire</a>';
        }
        ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
        <div class="thumbnail"><img src="medias/pawprint.png" class="mt-3" alt="Thumbnail Image 1">
          <div class="caption mt-3">
            <h3>Assurance Bonheur</h3>
            <p>Retrouvez votre chien plus heureux que jamais. Il vous retrouvera souriant, après avoir pu dépenser toute son énergie en compagnie d'autres chiens de sa taille. Dogpal est votre partenaire promenades.</p>
            <?php if (isset($_SESSION["loggedin"])){
          $usuName = htmlspecialchars($_SESSION["username"]);
          echo '<a href="createMission.php" class="btn btn-primary" role="button">Poster une annonce</a>';

        }else {
          echo '<a href="register.php" class="btn btn-primary" role="button">S\'inscrire</a>';
        }
        ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Partie avec les commentaires des utilisateurs -->
  <div class="container-fluid mt-4 mb-4" id="containerBlanc">
    <div class="container lowLight" id="avis">
      <div class="row">
        <div class="col-md-12">
          <h2 id="testiTitle">Ce que nos <b>clients</b> en disent :</h2>
          <div id="myCarousel avis" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <!-- <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol> -->
            <!-- Wrapper -->
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
                          <p>Chimney est plus heureuse que jamais. Et moi, je n'ai plus besoin de me forcer lorsque je n'ai pas l'envie ou le temps de faire une grande promenade.</p>
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
                          <p>J'adore dogpal. Merci pour toutes ces journées de bonheur passées à promener des chiens adorables. Je retravaillerai pour vous.</p>
                          <p class="overview"><b>Mary Saveley</b>, maîtresse de Mickel</p>
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

  <!-- Footer avec liens de navigation Pied de Page-->
  <?php
    require "footer.php";
   ?>

  <!-- Bootstrap : jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>
