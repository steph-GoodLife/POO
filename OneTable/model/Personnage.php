<?php

// cette clase est le mapping d'une table mysql nommée personnage (dans la db onetable)
class Personnage
{

    // Attributs (les champs de la table personnage)
    protected $idPersonnage; // sans valeurs
    protected $theName = "Anonyme";
    protected $theEndurance = 120;
    protected $thedefense = 20;
    protected $theAttac = 20;
    protected $theExp = 0;
    protected $theFight = 0;

    // Constante (non obligatoire, hors mapping de la table)
    const EXPLICATION = "Ceci est la classe permettant de créer des Personnage, attention tous les setters ne sont pas publics!";


    // Méthodes

    // Méthode magique __construct, est appelé lors de l'instanciation de la classe
    public function __construct(array $datas = [])
    {
        // si le tableau n'est pas vide, tentative d'hydratation
        if (!empty($datas)) {
            $this->hydrate($datas);
        }else{
            // on met l'attaque à jour en prenant l'attaque par défaut à laquelle on rajoute un dé (première clef => total des dés)
            $this->setTheAttac((
                $this->getTheAttac()
                +$this->lancerDes(1)[0])
            );
            // idem pour défense
            $this->setThedefense((
                $this->getThedefense()
                +$this->lancerDes(1)[0])
            );
        }
    }

    // permet de lancer des dés de 6, $nb représente le nombre de dés, return array contenant les scores de chaque dés, la première entrée est le total des dès
    public function lancerDes(int $nb){
        $nbTotal = 0;
        for($i=1;$i<=$nb;$i++){
            $lancerDeDe = mt_rand(1,6);
            $tabDes[] = $lancerDeDe;
            $nbTotal += $lancerDeDe;
        }
        array_unshift($tabDes,$nbTotal);
        return $tabDes;
    }

    // hydratation: transformations des clefs d'un tableau en setters et utilisation des valeurs pour à jour nos attributs
    protected function hydrate(array $tab)
    {
        foreach ($tab AS $key => $value) {
            $setterName = "set" . ucfirst($key);
            if (method_exists($this, $setterName)) {
                $this->$setterName($value);
            }
        }
    }


    // GETTERS AND SETTERS (MUTATORS)
    public function getIdPersonnage()
    {
        return $this->idPersonnage;
    }

    protected function setIdPersonnage(int $idPersonnage): void
    {
        $this->idPersonnage = $idPersonnage;
    }

    public function getTheName(): string
    {
        return $this->theName;
    }

    public function setTheName(string $theName): void
    {
        $theName = htmlspecialchars(strip_tags(trim($theName)), ENT_QUOTES);
        if (!empty($theName)) {
            $this->theName = $theName;
        }
    }

    public function getTheEndurance(): int
    {
        return $this->theEndurance;
    }


    protected function setTheEndurance(int $theEndurance): void
    {
        $this->theEndurance = $theEndurance;
    }

    public function getThedefense(): int
    {
        return $this->thedefense;
    }

    protected function setThedefense(int $thedefense): void
    {
        $this->thedefense = $thedefense;
    }

    public function getTheAttac(): int
    {
        return $this->theAttac;
    }

    protected function setTheAttac(int $theAttac): void
    {
        $this->theAttac = $theAttac;
    }

    public function getTheExp(): int
    {
        return $this->theExp;
    }

    protected function setTheExp(int $theExp): void
    {
        $this->theExp = $theExp;
    }

    public function getTheFight(): int
    {
        return $this->theFight;
    }

    protected function setTheFight(int $theFight): void
    {
        $this->theFight = $theFight;
    }
    // END OF GETTERS AND SETTERS (MUTATORS)

}