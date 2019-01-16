<?php
/* Connexion a la base de donnée - On prepare les credentials*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'dogpal');

/* Connection a la BDD MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* Verification de la connection */
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
