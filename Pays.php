<?php

class Pays 
{
    private string $_pays;
    private array $_equipe;


public function __construct(string $pays) 
{
    $this->_pays = $pays;
    $this->_equipes = [];
}

public function addEquipe(Equipe $equipe) 
{
    $this->_equipe[] = $equipe;
    
}

public function getPays() 
{
    return $this->_pays;
}

public function getEquipe() 
{
    return $this->_equipe;
}


public function to__String() 
{
    return $this->getPays().$this->getEquipe();
}

                                 /*Function permet d'afficher les equipes d'un pays*/
public function afficherEquipe()
{
    echo " La listes des équipes du pays : ". $this." sont :<br>";
    foreach ($this->_equipes as $equipe) 
    {
        echo $equipe."<br>";
    }
}
























}