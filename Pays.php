<?php

class Pays 
{
    private string $_pays;
    private array $_carriere;


public function __construct(string $pays) 
{
    $this->_pays = $pays;
    $this->_equipes = [];
    $this->_carrieres = [];
}

public function addEquipe($equipe) 
{
    $this->_equipes[] = $equipe;
    
}

public function getPays() 
{
    return $this->_pays;
}

public function getEquipe() 
{
    return $this->_equipe;
}


public function __toString() 
{
    return $this->getPays();
}

public function addCarriere($carriere)
{
    foreach($this->carrieres as $carriere)
    {
        return $carriere."<br>";
    }
}
                                 /*Function permet d'afficher les equipes d'un pays*/
public function afficherEquipe()
{
    echo " La liste des équipes du pays : ". $this." sont :<br>";
    foreach ($this->_equipes as $equipe) 
    {
        echo $equipe."<br>";
    }
}

























}