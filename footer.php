  <!-- Footer avec liens de navigation Pied de Page -->
  <head>
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>dogpal.fr</title>
  </head>

  <footer>
    <div class="container centered mt-3">
      <div class="row mt-4" id="piedPage">
        <div class="col-md-6" id="piedPageGauche">


          <div class="row mt-4 mb-4">
                <?php
                  if (isset($_SESSION["loggedin"])){

                    echo '<div class="col-6 mb-4">';
                    echo '<ul class="nav navbar-nav">';
                    echo '<li><a href="index.php">Acceuil</a></li>';
                    echo '<li><a href="prix.php">Tarifs</a></li>';
                    echo '<li><a href="https://medium.com/search?q=dog%20walking target="_blank">Blog</a></li></ul></div>';

                    echo '<div class="col-6">';
                    echo '<ul class="nav navbar-nav">';
                    echo '<li><a href="promeneurcard.php">Promeneurs</a></li>'; 
                    echo '<li><a href="owner.php">Missions</a></li>';
                    echo '<li"><a href="createMission.php">Dépot d\'annonce</a></li>'; 
                    echo '</ul></div>';
                  }else{
                    echo '<div class="col-md-6 text-center">';
                    echo '<ul class="nav navbar-nav">';
                    echo '<li><a href="index.php">Acceuil</a></li>';
                    echo '<li><a href="prix.php">Tarifs</a></li>';
                    echo '<li><a href="https://medium.com/search?q=dog%20walking target="_blank">Blog</a></li></ul></div>';
                  }
                ?>
          </div>
          
          <div class="row">
              <!-- Call to action -->
            <?php 
              if (isset($_SESSION["loggedin"])) {
              $usuName = htmlspecialchars($_SESSION["username"]);
              echo '<div class="col-12 centered"><a href="createMission.php" class="btn btn-primary" role="button">Poster une annonce</a></div>';
              } else {
              echo '<div class="col-12 centered"><a href="register.php" class="btn btn-primary centered" role="button">S\'inscrire</a></div>';
              }
            ?>
    <!-- Call to action -->
          
          </div>


          </div>
        <div class="col-md-6 vanish centered">
          <iframe width="400" height="220" src="https://www.youtube.com/embed/I11bPV4pgEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
      </div>
    </div>

  <div class="container-fluid">
    <div class="row-footer">
      <div class="row row-content">
        <div class="enLigne col-12 centered pt-3 pb-2">
          <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
          <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
          <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
          <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
          <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
          <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-copyright text-center pb-4">© 2019 Copyright:
      <a href="https://www.dogpal.fr/">dogpal.fr</a>
  </div>
  </footer>