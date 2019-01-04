
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
    <a class="navbar-brand" href="#">DogPal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Acceuil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prix.php">Tarifs</a>
        </li>
      </ul>
    </div>

    <div class="header-login">
      <?php
        if (isset($_SESSION["loggedin"])){
          $usuName = htmlspecialchars($_SESSION["username"]);
          echo '<div>Bonjour '.$usuName.'<form action="logout.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form></div>';

        }else {
          echo '<a href="login.php">Connexion</a> ou <a href="register.php">Inscription</a>';
        }
       ?>


    </div>
  </nav>
