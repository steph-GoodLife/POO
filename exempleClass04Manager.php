<?php

// classe qui permet généralement de gérer une autre classe (mapping de base de données => 1 table = 1 classe) par exemple un CRUD
class exempleClass04Manager
{
    protected $connection;

    public function __construct(mysqli $db)
    {
        $this->connection = $db;
    }

    public function createPerso(exempleClass04 $perso){

    }

    public function updatePerso(exempleClass04 $perso){

    }

}