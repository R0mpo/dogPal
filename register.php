<?php
require_once "header.php";
// Connection BDD
require_once "config.php";

// Création de variables sans valeurs
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validattion du username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Preparation de la query SQL
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Attribution des parametres a $stmt
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Parametre
            $param_username = trim($_POST["username"]);

            // On lance $stmt
            if(mysqli_stmt_execute($stmt)){
                /* On enregistre le resultat de $stmt */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // On ferme $stmt
        mysqli_stmt_close($stmt);
    }

    // Validation du mot de passe
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Verification double du mot de passe
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Si pas d'erreures, on va ajouter les informations dans notre BDD
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Query SQL d'insertion de la donnée
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Attribution des paramètres
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Parametres :
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // On execute $stmt
            if(mysqli_stmt_execute($stmt)){
                // On renvoie vers la page connected.php
                echo '<meta http-equiv="refresh" content="1 ; url=login.php">';
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // On ferme $stmt
        mysqli_stmt_close($stmt);
    }

    // On kill la connexion
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-1.7.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
</head>
<body id="boddy">
    <div class="container conthaineur">
        <h1 id="ashun" class="centered">Sign Up</h1>
        <p class="centered">Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <ul>
             <li class="form-group liul mt-3 mb-3 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label for="username">Username:</label>
                <input type="text" name="username"id="username" class="form-control inphut" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </li>
            <li class="form-group liul mt-3 mb-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="pswd">Password:</label>
                <input type="password" name="password" id ="paswd" class="form-control inphut" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </li>
            <li class="form-group liul mt-3 mb-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label for="pswd">Confirm Password</label>
                <input type="password" name="confirm_password"  class="form-control inphut" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </li>
            <li class="form-group liul mt-3 mb-3">
                <input type="submit" class="btn btn-primary inphut" value="Submit">
                <input type="reset" class="btn btn-default inphut" value="Reset">
       </li>
             </ul>
        </form>
        
        <div id="pswd_info">
                    <p class="centered">Nous recommendons un mot de passe respectant les conditions suivantes :</p>
                    <ul>
                        <li id="letter" class="invalid liul">Au moins <strong>une lettre</strong></li>
                        <li id="capital" class="invalid liul">Au moins  <strong>une lettre majuscule</strong></li>
                        <li id="number" class="invalid liul">Au moins  <strong>un chiffre</strong></li>
                        <li id="length" class="invalid liul">Au moins  <strong>8 characters lettres</strong></li>
                    </ul>
                </div>
        <p class="centered">Vous avez déjà un compte ? <a href="login.php">Connectez-vous...</a>.</p>
        </div>
        <script type="text/javascript">

    $( document ).ready( function ()
    {

      $( 'input[type=password]' ).keyup( function ()
        {
          var pswd = $( this ).val();
          //validate the length
          if ( pswd.length < 8 )
          {
              $( '#length' ).removeClass( 'valid' ).addClass( 'invalid' );
          } else
          {
              $( '#length' ).removeClass( 'invalid' ).addClass( 'valid' );
          }
          //validate letter
          if ( pswd.match( /[A-z]/ ) )
          {
              $( '#letter' ).removeClass( 'invalid' ).addClass( 'valid' );
          } else
          {
              $( '#letter' ).removeClass( 'valid' ).addClass( 'invalid' );
          }

          // Validation de l'utilisation d'une lettre majuscule
          if ( pswd.match( /[A-Z]/ ) )
          {
              $( '#capital' ).removeClass( 'invalid' ).addClass( 'valid' );
          } else
          {
              $( '#capital' ).removeClass( 'valid' ).addClass( 'invalid' );
          }

          // Validation du nombre de lettres
          if ( pswd.match( /\d/ ) )
          {
              $( '#number' ).removeClass( 'invalid' ).addClass( 'valid' );
          } else
          {
              $( '#number' ).removeClass( 'valid' ).addClass( 'invalid' );
          }

        } ).focus( function ()
        {
            $( '#pswd_info' ).show();
        } ).blur( function ()
        {
            $( '#pswd_info' ).hide();
        } );

    } );

</script>

</body>
</html>