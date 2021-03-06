
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
  <!-- Barre de menus et navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">DogPal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prix.php">Tarifs</a>
        </li>
        <?php
        if (isset($_SESSION["loggedin"])){
          echo '<li class="nav-item">
          <a class="nav-link" href="promeneurcard.php">Promeneurs</a>
          </li>'; 
          echo '<li class="nav-item"><a class="nav-link" href="owner.php">Missions</a>
          </li>';
          echo '<li class="nav-item"><a class="nav-link" href="createMission.php">Dépot d\'annonce</a>
          </li>'; 
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="https://medium.com/search?q=dog%20walking" target="_blank">Blog</a>
        </li>
      </ul>
    </div>

    <div class="header-login">
      <?php
        if (isset($_SESSION["loggedin"])){
          $usuName = htmlspecialchars($_SESSION["username"]);
          echo '<span id="uneLigne">Bonjour '.$usuName.'<form action="logout.php" method="post"  id="decoBoutton">
              <button type="submit" name="logout-submit">Logout</button>
            </form></span>';

        }else {
          echo '<a href="login.php">Connexion</a> ou <a href="register.php">Inscription</a>';
        }
       ?>

    </div>
  </nav>
