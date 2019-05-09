<?php


/**
 * description of classes
 *
 * author webform
 *
 * creation d'une classe d'exemple
 * elles representes notre "usine" ou "fabrique" d'objets de typa nosClasses01 qui sont en realité nomées des instances d'objets
 */
class nosClasses01 {
    /*
     * attributs, ce sont des variables isolées dans la classe qui peuvent avoir 3 niveau de visibilité
     */

          /*
           * Public -> peuvent être modifiés et lus en dehirs de la classe par son environnement (peu utilisé)
           */
          public $attributPublic = "texte publique";
}
//Encapsulation, nos variables même publique ne sont pas accessibles en dehors de la classe
//echo $attributPublic;

//instanciation de la classe (création d'une instance d'objet)

$monPremierObjet = new nosClasses01();

//on voit clairement son type
echo gettype($monPremierObjet)."<br>";

//on sait lire un attribut publique très facilement en utilisant le nom de l'instance de classe $monPremierObjet -> attributPublic
echo $monPremierObjet->attributPublic;

/**on a 2 autres visibilité
 * private
**/
private $attributPrive = 22;
/*
 * protected -> ne peut être modifié ou de lire en dehors de la classe
 */
/*
 * prtotected
 */




//on peut modifier sans contrainte en dehors de la classe, d'où sa faible utilisation pour les attributs

echo "<pre>";

var_dump($monPremierObjet);
echo "</pre>";
