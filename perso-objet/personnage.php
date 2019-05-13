<?php
/**
 * description of personnage
 *
 * @author webform
 */
class personnage
{
    //Attributs
    protected $nickname = "anonyme";
    protected $sante = 100;
    protected $force = 10;
    protected $endurance = 10;
    protected $experience = 0;

    //method
    public function __construct(){
    }




    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return int
     */
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * @param int $sante
     */
    public function setSante($sante)
    {
        $this->sante = $sante;
    }

    /**
     * @return int
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param int $force
     */
    public function setForce($force)
    {
        $this->force = $force;
    }

    /**
     * @return int
     */
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * @param int $endurance
     */
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    /**
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }




}
