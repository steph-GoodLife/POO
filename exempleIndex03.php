<?php
require_once "exempleClass03.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Moi">

    <title>exempleClass03.php</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/startbootstrap-bare-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">exempleClass03.php</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">exempleClass03.php</h1>
            <p class="lead">Fichier qui appelle exempleClass03.php</p>
            <p>
                <?php
    // instanciations de la classe exempleClass03 avec new
    $perso1 = new exempleClass03();
    $perso2 = new exempleClass03();

    // l'attribut publique est le seul qu'on peut afficher sans getter et modifier sans setter avec -> uniquement sur une instance de la classe (grand danger d'erreur de manipulation ou de faille de sécurité, l'attribut public est rarement utilisé)
                // affichage
                echo $perso2->nom;
                // mettre à jour
                $perso2->nom = true;
                echo "<br>";
                // affichage (le booléen true affichera 1)
                echo $perso2->nom;
                echo "<br>";

    // Les constantes sont lisibles depuis l'extérieur de la classe ou depuis une de ses instances en utilisant ::
               // affichage depuis la classe
               echo exempleClass03::DATE_DE_CREATION;
               echo "<br>";
               // affichage depuis une instance de la classe
                echo $perso2::DATE_DE_CREATION;
                echo "<br>";

    // appel d'un getter publique qui permet d'afficher un attribut non publique
                // possible seulement depuis une instance
                echo $perso1->getAttaque();
                echo "<br>";
    // appel d'un setter pour modifier l'attaque des instances
                $perso1->setAttaque("lulu"); // pas fonctionné
                $perso2->setAttaque(25);// fonctionne car bon format
    // appel d'un setter pour modifier la vie de nos instances
                $perso1->setVie("lulu"); // pas fonctionné
                $perso2->setVie(115); // ok
                ?>
            </p>
            <pre class="text-left"><?php var_dump($perso1,$perso2)?></pre>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="http://localhost/startbootstrap-bare-gh-pages/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/startbootstrap-bare-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>