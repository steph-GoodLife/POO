<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Moi">

    <title>Création de 2 Personnages</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/startbootstrap-bare-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">Personnage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?create2perso">Create 2 Personnages</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Affichage des Personnages</h1>
            <p class="lead"><?=Personnage::EXPLICATION?></p>
        </div>
        <div class="col-lg-8 text-left">
            <h3>Affichage des 2 personnages grâce à leurs getters</h3>
            <h4><?=$perso1->getTheName()?></h4>
            <p>Endurance: <?=$perso1->getTheEndurance()?> </p>
            <p>Attaque: <?=$perso1->getTheAttac()?> </p>
            <p>Défense: <?=$perso1->getThedefense()?> </p>
            <p>Expérience: <?=$perso1->getTheExp()?> </p>
            <p>Total des combats: <?=$perso1->getTheFight()?> </p>

            <h4><?=$perso2->getTheName()?></h4>
            <p>Endurance: <?=$perso2->getTheEndurance()?> </p>
            <p>Attaque: <?=$perso2->getTheAttac()?> </p>
            <p>Défense: <?=$perso2->getThedefense()?> </p>
            <p>Expérience: <?=$perso2->getTheExp()?> </p>
            <p>Total des combats: <?=$perso2->getTheFight()?> </p>



            <h3>var_dump des personnages</h3>
            <pre><?php

            var_dump($perso1,$perso2);
            ?></pre>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="http://localhost/startbootstrap-bare-gh-pages/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/startbootstrap-bare-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>