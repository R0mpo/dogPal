<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}?>

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
    <?php
    require "header.php";
    ?>

    <div class="container pb-4">
    <div class="row centered">
    
    <div class="col">
    <h2><img src="medias/flag.png" width="50px">Remplissez ce formulaire pour commencer !</h2><br>

    <form name="mission-form" action="createMission.php" method="post">

    <label for="FirstName">Vous avez besoin de :</label>
    <input type="radio" name="x" value="promeneur">
    <label for="promeneur">Promener des chiens</label>
    <input type="radio" name="x" value="besoinPromeneur" checked >
    <label for="besoinPromeneur">Faire promener mon chien</label><br>


    <label for="FirstName">Prénom :</label>
    <input type="text" class="form-control mb-3" name="prenom" placeholder="John" required>


    <label for="Name">Nom de famille :</label>
    <input type="text" class="form-control mb-3" name="nom" placeholder="Doe" required>


    <label for="Email">Adresse email :</label>
    <input type="email" class="form-control mb-3" name="email" placeholder="john.doe@g2r.fr" required>


    <label for="Phone">Numéro de téléphone :</label>
    <input type="text" class="form-control mb-3" name="your_phone" placeholder="+33 6 89 89 89 89" required>


    <label for="mission_text">Description de la mission :</label>
    <textarea name="mission_text" class="form-control mb-3" rows="3" cols="28" rows="5" placeholder="Décrivez ici la mission souhaitée"></textarea> 

    <label for="dogoo">Nom de votre chien :</label>
    <input type="text" class="form-control mb-3" name="doggo" placeholder="Orion" required>
    
    <button type="submit" class="btn btn-primary" name="submit" value="submit" id="submit_form">Submit</button>
    </form>

    <?php
        require_once "config.php";

            $type = $_POST['x'];
            $fname = $_POST['prenom'];
            $lname = $_POST['nom'];
            $email = $_POST['email'];
            $tel = $_POST['your_phone'];
            $annonce = $_POST['mission_text'];
            $doggo = $_POST['doggo'];

            $query = "INSERT INTO `mission`(`type`, `prenom`, `nom`, `email`, `telephone`, `annonce`, `doggo`) VALUES ('$type','$fname','$lname','$email','$tel', '$annonce', '$doggo')";

            $result = mysqli_query($link,$query);

            if(isset($_POST['submit'])){
                echo 'Redirection en cours';
                echo '<meta http-equiv="refresh" content="1 ; url=http://localhost/projectMaster/missionCreated.php">';

                // header('refresh:5, url=missionCreated.php');
            }else if($result) {
                echo '<p class="">Merci de remplir le formulaire</p>';
            }
                else {
                    echo '<p class="rouge">Something went wrong</p>';
                }

                mysqli_free_result($result);
                mysqli_close($link);
    ?>

</body>
</html>