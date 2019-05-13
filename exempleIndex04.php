<?php
// Appel de la classe
require_once "exempleClass04.php";
// Appel du manager de la classe
require_once "exempleClass04Manager.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>exempleClass04</title>
</head>
<body>
<h1>exempleClass04</h1>
<h2>Seul élément de la classe visible sans instanciation</h2>
<p>C'est la constante de la classe exempleClass04::HUMAIN</p>
<p><?=exempleClass04::HUMAIN?></p>
<h2>Création de 2 instances de exempleClass04</h2>
<?php
// perso avec valeurs par défaut
$perso1 = new exempleClass04();
$perso2 = new exempleClass04();

// perso avec passage de données au format tableau pour hydrater les attributs lors de l'instanciation (appel du constructeur)
$perso3 = new exempleClass04([
        'name'=>'Medhi',
        'vie'=>80,
        'attaque'=>14,
        'defense'=>7,
        'zut'=>10
]);

// initialisation des valeurs de $perso1 et $perso2 grâce aux setters publiques
$perso1->setName("Steve");
$perso1->setVie(90);
$perso1->setAttaque(12);
$perso1->setDefense(9);

$perso2->setName("Jo");
$perso2->setVie(105);
$perso2->setAttaque(11);
$perso2->setDefense(11);
?>
<p>Affichage grâce aux getters:<br><br>
    <?=$perso1->getName()?> à <?=$perso1->getVie()?> points de vie, <?=$perso1->getAttaque()?> points d'attaque et <?=$perso1->getDefense()?> points de défense.<br>

    <?=$perso2->getName()?> à <?=$perso2->getVie()?> points de vie, <?=$perso2->getAttaque()?> points d'attaque et <?=$perso2->getDefense()?> points de défense.<br>

    <?=$perso3->getName()?> à <?=$perso3->getVie()?> points de vie, <?=$perso3->getAttaque()?> points d'attaque et <?=$perso3->getDefense()?> points de défense.<br>

</p>

<p>Bagare Perso1 et Perso2</p>
<p>
    <?php
    echo $perso1->attaquePerso($perso2);
    echo $perso2->attaquePerso($perso1);
    echo $perso1->attaquePerso($perso2);
    echo $perso2->attaquePerso($perso1);
    echo $perso1->attaquePerso($perso2);
    echo $perso2->attaquePerso($perso1);
    ?>
</p>
<pre><?php var_dump($perso1,$perso2,$perso3) ?></pre>
</body>
</html>