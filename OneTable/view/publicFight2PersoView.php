<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Moi">

    <title>Combat de 2 personnages au hasard</title>

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
                <li class="nav-item">
                    <a class="nav-link" href="?createperso">Create a Personnage</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?combatHasard">Combat de 2 personnages au hasard</a>
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

            <?php
            foreach ($nosPerso AS $item){
                ?>
                <h3><?=$item->getTheName()?></h3>
                <p>Endurance: <?=$item->getTheEndurance()?> </p>
                <p>Attaque: <?=$item->getTheAttac()?> </p>
                <p>Défense: <?=$item->getThedefense()?> </p>
                <p>Expérience: <?=$item->getTheExp()?> </p>
                <p>Total des combats: <?=$item->getTheFight()?> </p>
                <?php
            }

            ?>
<h3>Début du combat</h3>
            <?php
            // combattants
            $p1 = $nosPerso[0];
            $p2 = $nosPerso[1];

            while($p1->getTheEndurance()>0&&$p2->getTheEndurance()>0) {
                echo $p1->attaquerPerso($p2);
                echo $p2->attaquerPerso($p1);
            }


            ?>



        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="http://localhost/startbootstrap-bare-gh-pages/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/startbootstrap-bare-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>