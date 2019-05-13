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
    const HUMAIN = true;

// -----------------------------------------------------------------
    // Méthodes

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







}