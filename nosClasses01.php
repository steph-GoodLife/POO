<?php


/**
 * Description of nosClasses01
 *
 * @author webform
 * 
 * Création d'une classe d'exemple,
 * Elle représente notre "usine" ou "fabrique" d'objets de type "nosClasses01" (qui sont en réalité nommés des "instances d'objet")
 * 
 */
class nosClasses01 {
    /*
     *  Attributs, ce sont des variables, isolées dans la classe, qui peuvent avoir 3 niveaux de visibilités
     */
    
        /*
        * Public -> peuvent être modifiés et lus en dehors de la classe par son environnement, peu utilisé
        */
       public $attributPublic = "Texte publique";
       public $attributPublic2,$attributPublic3;
       /*
        * On a 2 autres visibilités:
        * Private -> impossible de modifier ou de lire en dehors de la classe, même pour ses héritiers
        */
       private $attributPrive = 22;
       /*
        * Protected -> impossible de modifier ou de lire en dehors de la classe, sauf pour ses héritiers
        */
       protected $attributProtege = true;
       
    /*
     *  Constantes de classes ce sont des constantes créés avec le mot clef const NOM_, elles doivent avoir une valeur à la création, elle est toujours lisible en dehors de la classe, mais n'est jamais modifiable, elle est isolées dans la classe, mais peut être lue depuis l'instance de classe OU depuis la classe même
     */   
    const MA_CONSTANTE_1 = "Bientôt manger!";
}

// Encapsulation, nos attributs (variables) même publiques, ne sont pas accessible en dehors de la classe
// echo $attributPublic; 

// Instanciation de la classe (création d'une instance d'objetnosClasses01)

$monPremierObjet = new nosClasses01();


// on voit que son type est bien un object
echo gettype($monPremierObjet)."<br>";

// on sait lire un attribut public très facilement en utilisant le nom de l'instance de classe $monPremierObjet->attibutPublic;
echo $monPremierObjet->attributPublic."<br>";

// on peut modifier un attribut publique sans contrainte en dehors de la classe, d'où ça faible utilisation pour les attributs
$monPremierObjet->attributPublic=5;
echo $monPremierObjet->attributPublic."<br>";

// Si on essaye de lire un attribut privé ou protégé: Erreur fatale
// echo $monPremierObjet->attributPrive;
// echo $monPremierObjet->attributProtege;

// idem pour modifier

// $monPremierObjet->attributPrive = 20;
// $monPremierObjet->attributProtege = 20;

$monPremierObjet->attributPublic2 = time();
$monPremierObjet->attributPublic3 = date("Y-m-d H:i:s");

echo "<p>Temps en seconde : $monPremierObjet->attributPublic2</p>"
        . "<p>Datetime actuel: $monPremierObjet->attributPublic3</p>";


// Les constantes de classe appartiennent à la classe, ses descendants et ses instances

// on ne la trouve pas (encapsulation) sans utiliser le nom de la classe ou une de ses instances
// echo MA_CONSTANTE_1;


// affichage d'une constante de classe depuis l'instance
echo $monPremierObjet::MA_CONSTANTE_1;

// affichage d'une constante depuis la classe
echo nosClasses01::MA_CONSTANTE_1;

$monDeuxiemeObjet = new nosClasses01();


echo "<pre>";
var_dump($monPremierObjet,$monDeuxiemeObjet);

 echo "</pre>";
