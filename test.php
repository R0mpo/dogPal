<?php
session_start();

require_once "config.php";

$sql = "SELECT mission_id, type, prenom, nom, annonce FROM mission ORDER BY created_at DESC LIMIT 1";
$sql1 = "SELECT mission_id, type, prenom, nom, annonce FROM mission ORDER BY created_at DESC LIMIT 1 OFFSET 1";
$sql2 = "SELECT mission_id, type, prenom, nom, annonce FROM mission ORDER BY created_at DESC LIMIT 1 OFFSET 2";
$sql3 = "SELECT mission_id, type, prenom, nom, annonce FROM mission ORDER BY created_at DESC LIMIT 1 OFFSET 3";
$sql4 = "SELECT mission_id, type, prenom, nom, annonce FROM mission ORDER BY created_at DESC LIMIT 1 OFFSET 4";
$sql5 = "SELECT mission_id, type, prenom, nom, annonce FROM mission ORDER BY created_at DESC LIMIT 1 OFFSET 5";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    printf ("%s %s\n", $row["prenom"], $row["nom"]);
} else {
    echo "Something went wrong";
}

mysqli_close($link);
