<?php
/**
 * Description of Personnage
 *
 * @author webform
 */
class Personnage {
    
    // Attributs
    protected $nickName="Anonyme";
    protected $sante = 100;
    protected $force = 10;
    protected $endurance = 10;
    protected $experience = 0;
    
    // methods
    
    // constructeur avec paramètre de type tableau, vide par défaut
    public function __construct(array $datas = []) {
        // si le tableau n'est pas vide
        if(!empty($datas)){
            // on essaye d'hydrater l'objet (donc remplir les setters avec les valeurs passées dans le tableau)
            $this->hydrate($datas);
        }
    }
    
    // fonction d'hydratation , sert à utiliser les $datas du constructeur pour appeler les setters
    
    protected function hydrate(array $values){
        // pour chaque élément du tableau
        foreach($values AS $key => $value){
            // on crée le nom du setter attendu en mettant la première lettre de la clef en majuscule (ucfirst) et on rajoute "set" devant
            $setterName = "set".ucfirst($key);
            // si le setter existe
            if(method_exists($this, $setterName)){
                // on donne la valeur au setter
                $this->$setterName($value);
            }
        }
    }



    // getters
    public function getNickName() {
        return $this->nickName;
    }

    public function getSante() {
        return $this->sante;
    }

    public function getForce() {
        return $this->force;
    }

    public function getEndurance() {
        return $this->endurance;
    }

    public function getExperience() {
        return $this->experience;
    }

    // setters
    public function setNickName($nickName) {
        $this->nickName = $nickName;
    }

    public function setSante($sante) {
        $this->sante = $sante;
    }

    public function setForce($force) {
        $this->force = $force;
    }

    public function setEndurance($endurance) {
        $this->endurance = $endurance;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }


    
}
