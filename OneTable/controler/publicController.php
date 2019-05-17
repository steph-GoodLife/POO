<?php

// dependencies
require_once "model/Personnage.php";
require_once "model/PersonnageManager.php";

// create PersonnageManager
$managerPerso = new PersonnageManager($mysqli);

if(isset($_GET['create2perso'])) {

// datas from model without attributs (arguments)
    $perso1 = new Personnage();
    $perso2 = new Personnage();

// we give the name for this personnages
    $perso1->setTheName("Amir");
    $perso2->setTheName("André");

// insert 2 Personages into our DB

$managerPerso->createPersonnage($perso1);
$managerPerso->createPersonnage($perso2);

// view
    require_once "view/publicCreate2PersoView.php";
}else{

    // on prends tous les Personnages de la DB
    $recupAll = $managerPerso->readAllPersonnage();

    // tant qu'on a des personnages, on les transformes en instances de type Personnage (Hydratation)

    // view
    require_once "view/publicIndexView.php";
}
