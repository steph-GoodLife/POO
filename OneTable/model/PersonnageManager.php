<?php

/*
 * Classe qui permet de gérer les CRUD liés à la classe (et table) Personnage
 */
class PersonnageManager
{
    // attribut contenant la connexion sql
    private $db;

    public function __construct(mysqli $connect)
    {
        $this->db = $connect;
    }

    // INSERT Personnage (Crud)
    public function createPersonnage(Personnage $perso) : void {

        $sql = "INSERT INTO personnage (theName,theEndurance,thedefense,theAttac) VALUES ('{$perso->getTheName()}',{$perso->getTheEndurance()},{$perso->getThedefense()},{$perso->getTheAttac()})";

        mysqli_query($this->db,$sql)or die(mysqli_error($this->db));
    }

    // SELECT ALL Personnage (cRud)
    public function readAllPersonnage(){

        $sql = "SELECT * FROM personnage ORDER BY idPersonnage DESC;";
        $recup = mysqli_query($this->db,$sql) or die($this->db);

        return mysqli_fetch_all($recup,MYSQLI_ASSOC);

    }

}