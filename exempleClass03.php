<?php

/*
 * Un fichier par class, le nom du fichier est le même que le nom de la classe ( pour s'y retrouver mais surtout pour générer un autoload de classe)
 */
class exempleClass03
{
    // Attributs
    public $nom="Anonyme";
    protected $attaque = 10;
    private $defense = 8;
    private $vie;

    // Constantes
    const DATE_DE_CREATION = 2019;

    // Méthodes

        // getters (affichage d'attributs non public) sur une instanciation de la classe. On écrit toujours get suivi du nom de l'attribut dont la première lettre est mise en majuscule

        public function getAttaque(){

           // renvoie l'attribut $attaque de l'instance en cours ($this => $var = new exempleClass03())
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
         * @return mixed
         */
        public function getVie()
        {
            return $this->vie;
        }



        // setters (modification d'attributs non publiques)sur une instanciation de la classe. On écrit toujours set suivi du nom de l'attribut dont la première lettre est mise en majuscule, il faut passer un paramètre pour modifier l'attribut

        public function setAttaque($nombre){

            // conversion en entier
            $nombre = (int) $nombre;

            // si différent de vide
            if(!empty($nombre)){
                $this->attaque = $nombre;
            }
        }

        /**
         * @param int $defense
         */
        public function setDefense(int $defense): void
        {
            $this->defense = $defense;
        }

        /**
         * @param mixed $vie
         */
        public function setVie($vie): void
        {
            $vie = (int) $vie;
            if(!empty($vie)) {
                $this->vie = $vie;
            }else{
                $this->vie = 0;
            }
        }


}