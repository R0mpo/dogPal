<?php
// On lance la session
session_start();

// On enleves toutes les infos de la session
$_SESSION = array();

// Puis on détruit la session
session_destroy();

// Puis on redirige vers la home page
header("location: index.php");
exit;
?>
