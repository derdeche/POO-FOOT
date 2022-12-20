<?php

class Pays 
{
    private string $_pays;
    private array $_equipes;


public function __construct(string $pays) 
{
    $this->_pays = $pays;
    $this->_equipes = [];
}

public function addEquipe(string $equipe) 
{
    $this->_equipe[] = $equipe;
    return $this;
}

public function getPays() 
{
    return $this->_pays;
}

public function getEquipe() 
{
    return $this->_equipe;
}
                                 /*Function permet d'afficher les equipes d'un pays*/
public function afficherEquipe()
{
    echo " La listes des équipes du pays : ". $this." sont :<br>";
    foreach ($this->_equipe as $equipe) 
    {
        echo $equipe."<br>";
    }
}
























}