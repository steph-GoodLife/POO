<?php

// dependencies
require_once "model/Personnage.php";
require_once "model/PersonnageManager.php";

// create PersonnageManager
$managerPerso = new PersonnageManager($mysqli);

if(isset($_GET['createperso'])) {

// datas from model without attributs (arguments)
    $perso = new Personnage();

// we give the name for this personnage
    $perso->createTheName(8);

// insert 1 Personage into our DB

$managerPerso->createPersonnage($perso);

// view
    require_once "view/publicCreate2PersoView.php";
}elseif(isset($_GET['combatHasard'])){

    // on prends 2 Personnages au hasard depuis la DB
    $recupAll = $managerPerso->read2Personnage();

    // tant qu'on a des personnages, on les transformes en instances de type Personnage (Hydratation)
    foreach ($recupAll AS $item){
        $nosPerso[] = new Personnage($item);
    }

    // view
    require_once "view/publicFight2PersoView.php";
}else{

    // on prends tous les Personnages de la DB
    $recupAll = $managerPerso->readAllPersonnage();

    // tant qu'on a des personnages, on les transformes en instances de type Personnage (Hydratation)
    foreach ($recupAll AS $item){
        $nosPerso[] = new Personnage($item);
    }

    // view
    require_once "view/publicIndexView.php";
}
