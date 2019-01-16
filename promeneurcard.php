<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dogpal.fr</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="style.css">
</head>

<body> 
   <?php
    require "header.php";
    require_once "config.php";
    $sql = "SELECT * FROM mission WHERE type = 'promeneur' ORDER BY created_at DESC LIMIT 1";
    $sql1 = "SELECT * FROM mission WHERE type = 'promeneur' ORDER BY created_at DESC LIMIT 1 OFFSET 1";
    $sql2 = "SELECT * FROM mission WHERE type = 'promeneur' ORDER BY created_at DESC LIMIT 1 OFFSET 2";
    $sql3 = "SELECT * FROM mission WHERE type = 'promeneur' ORDER BY created_at DESC LIMIT 1 OFFSET 3";
    $sql4 = "SELECT * FROM mission WHERE type = 'promeneur' ORDER BY created_at DESC LIMIT 1 OFFSET 4";
    $sql5 = "SELECT * FROM mission WHERE type = 'promeneur' ORDER BY created_at DESC LIMIT 1 OFFSET 5";
    ?>


   <section id="team" class="pb-5">
    <div class="container">
    <h5 class="section-title h1">DOGSITTERS A VOTRE SERVICE !</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">
                                    <?php 
                                        $result = mysqli_query($link, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s %s\n", $row["prenom"], $row["nom"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?>
                                    
                                    </h4>
                                    <p class="card-text">
                                    <?php 
                                        $result = mysqli_query($link, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["email"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?>
                                    </p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Qui suis-je ?</h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["annonce"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                    <h4 class="card-title"><?php 
                                        $result = mysqli_query($link, $sql1);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s %s\n", $row["prenom"], $row["nom"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql1);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["email"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Qui suis-je ?</h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql1);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["annonce"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                    <h4 class="card-title"><?php 
                                        $result = mysqli_query($link, $sql2);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s %s\n", $row["prenom"], $row["nom"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql2);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["email"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Qui suis-je ?</h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql2);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["annonce"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                    <h4 class="card-title"><?php 
                                        $result = mysqli_query($link, $sql3);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s %s\n", $row["prenom"], $row["nom"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql3);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["email"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Qui suis-je ?</h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql3);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["annonce"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                    <h4 class="card-title"><?php 
                                        $result = mysqli_query($link, $sql4);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s %s\n", $row["prenom"], $row["nom"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql4);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["email"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Qui suis-je ?</h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql4);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["annonce"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                    <h4 class="card-title"><?php 
                                        $result = mysqli_query($link, $sql5);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s %s\n", $row["prenom"], $row["nom"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></h4> 
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql5);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["email"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Qui suis-je ?</h4>
                                    <p class="card-text"><?php 
                                        $result = mysqli_query($link, $sql5);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            printf ("%s\n", $row["annonce"]);
                                        } else {
                                            echo "Something went wrong";
                                        }
                                    ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>

<?php
    require "footer.php";
   ?>
<!-- Team -->
    
</body>
</html>