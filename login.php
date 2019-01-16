<?php
// Initialisation de la session
session_start();

// Si l'utilisateur est deja connecté, il est automatiquement envoyé vers la home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

// Charge a distance la configuration de la connexion a la BDD
require_once "config.php";

// Crée des variables sans valeur encore, pour plus de sécurité
$username = $password = "";
$username_err = $password_err = "";

// Processing de la donnée quand le formulaire est envoyé
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Vérifie que le champs Pseudo est bien remplis
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Vérifie si le champs Mot de Passe est remplis
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validation des Pseudos et Mots de passe entrés par l'utilisateur
    if(empty($username_err) && empty($password_err)){
        // Preparation du "select statement ($stmt)"
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Attribution des valeurs pour le $stmt
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Définition du paramètre
            $param_username = $username;

            // Tentative d'execution de la requete
            if(mysqli_stmt_execute($stmt)){
                // Enregistrement du resultat de la requete
                mysqli_stmt_store_result($stmt);

                // Va vérifier que le pseudo existe, et si oui va ensuite vérifier le mot de passe
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Attribution des resultats sur la variable $stmt
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Si le code arrive jusqu'ici, alors tout s'est bien passé. On ouvre une session et le visiteur est maintenant authentifié
                            session_start();

                            // On garde en memoire session 3 variables:
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Puis on envoie l'utilisateur vers la page principale.
                            header("location: index.php");
                        } else{
                            // On crée une erreur générique pour indiquer que le mot de passe etait pas bon
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // On crée une erreur générique pour indiquer que l'utilisateur n'existe pas
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // On ferme $stmt
        mysqli_stmt_close($stmt);
    }

    // On se déconnecte de la BDD
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>
