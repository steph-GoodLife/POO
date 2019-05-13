<?php


class exempleClass04
{
    // Attributs
    protected $name = "Anonymous";
    protected $attaque = 10;
    protected $defense = 10;
    protected $vie = 100;
// -----------------------------------------------------------------
    // Constante(s)
    const HUMAIN = "vrai";



// -----------------------------------------------------------------
    // Méthodes

    /**
     * Constructor
     * (new instance)
     */
    public function __construct(array $datas = [])
    {
        // si un tableau est passé en argument
        if(!empty($datas)){
            // appel de la méthodes d'hydratation
            $this->hydrate($datas);
        }
    }

    // hydratation: transformations des clefs d'un tableau en setters et utilisation des valeurs pour à jour nos attributs

    protected function hydrate(array $tab){
        foreach ($tab AS $key => $value){
            // création du nom du setter par les clefs du tableau
            $setterName = "set".ucfirst($key);
            // si le setters existe pour l'instance de la classe actuelle
            if(method_exists($this,$setterName)){
                $this->$setterName($value);
            }else{
                echo "$setterName n'est pas un setter valide!<br>";
            }
        }
    }

    // -----------------------------------------------------------------
        // Getters

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAttaque(): int
    {
        return $this->attaque;
    }

    /**
     * @return int
     */
    public function getDefense(): int
    {
        return $this->defense;
    }

    /**
     * @return int
     */
    public function getVie(): int
    {
        return $this->vie;
    }

    // -----------------------------------------------------------------
        // Setters


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $name = htmlspecialchars(strip_tags(trim($name)),ENT_QUOTES);
        if(!empty($name)) {
            $this->name = $name;
        }
    }

    /**
     * @param int $attaque
     */
    public function setAttaque(int $attaque): void
    {
        $this->attaque = $attaque;
    }

    /**
     * @param int $defense
     */
    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

    /**
     * @param int $vie
     */
    public function setVie(int $vie): void
    {
        $this->vie = $vie;
    }


    // nos méthodes de type action

    public function attaquePerso(exempleClass04 $autrePerso){

        $deuxdesMoi = mt_rand(1,6)+mt_rand(1,6);
        $attaque = $this->getAttaque()+$deuxdesMoi;

        $deuxdesLui = mt_rand(1,6)+mt_rand(1,6);
        $defense = $autrePerso->getDefense()+$deuxdesLui;

        if($attaque>$defense){
            $blesse = $attaque-$defense;
            $vieAutre = $autrePerso->getVie()-$blesse;
            // mise à jour de la vie de l'autre
            $autrePerso->setVie($vieAutre);
            return $this->getName()." a blessé ".$autrePerso->getName()." de $blesse points de vie<br>";
        }else{
            return $this->getName()." n'a pas blessé ".$autrePerso->getName()."<br>";
        }

    }

    public function defendPerso(exempleClass04 $autrePerso){



    }





}