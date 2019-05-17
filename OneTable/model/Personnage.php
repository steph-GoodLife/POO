<?php

// cette clase est le mapping d'une table mysql nommée personnage (dans la db onetable)
class Personnage
{

   // Attributs (les champs de la table personnage)
   protected $idPersonnage; // sans valeurs
   protected $theName="Anonyme";
   protected $theEndurance=120;
   protected $thedefense=10;
   protected $theAttac=10;
   protected $theExp=0;
   protected $theFight=10;

    /**
     * @return int
     */
    public function getIdPersonnage()
    {
        return $this->idPersonnage;
    }

    /**
     * @param mixed $idPersonnage
     */
    protected function setIdPersonnage( int $idPersonnage): void
    {
        $this->idPersonnage = $idPersonnage;
    }

    /**
     * @return string
     */
    public function getTheName(): string
    {
        return $this->theName;
    }

    /**
     * @param string $theName
     */
    public function setTheName(string $theName): void
    {
        $theName = htmlspecialchars(strip_tags(trim($theName)),ENT_QUOTES);
        if(!empty($theName)) {
            $this->theName = $theName;
        }
    }

    /**
     * @return int
     */
    public function getTheEndurance(): int
    {
        return $this->theEndurance;
    }

    /**
     * @param int $theEndurance
     */
    protected function setTheEndurance(int $theEndurance): void
    {
        $this->theEndurance = $theEndurance;
    }

    /**
     * @return int
     */
    public function getThedefense(): int
    {
        return $this->thedefense;
    }

    /**
     * @param int $thedefense
     */
    protected function setThedefense(int $thedefense): void
    {
        $this->thedefense = $thedefense;
    }

    /**
     * @return int
     */
    public function getTheAttac(): int
    {
        return $this->theAttac;
    }

    /**
     * @param int $theAttac
     */
    protected function setTheAttac(int $theAttac): void
    {
        $this->theAttac = $theAttac;
    }

    /**
     * @return int
     */
    public function getTheExp(): int
    {
        return $this->theExp;
    }

    /**
     * @param int $theExp
     */
    protected function setTheExp(int $theExp): void
    {
        $this->theExp = $theExp;
    }

    /**
     * @return int
     */
    public function getTheFight(): int
    {
        return $this->theFight;
    }

    /**
     * @param int $theFight
     */
    protected function setTheFight(int $theFight): void
    {
        $this->theFight = $theFight;
    }


}