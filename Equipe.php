<?php

class Equipe
{
    private $_equipe;
    private Pays $_pays;
    private array $_carriere;


public function __construct(string $equipe, string $pays, array $carriere)
{
    $this->_equipe = $equipe;
    $this->_pays = $pays;
    $this->_Pays->addJoueur($this);
    $this->_carriere = [];
}

public function addCariere(string $cariere) 
{
    $this->_cariere[] = $cariere;
    return $this;
}

public function getEquipe() 
{
    return $this->_equipe;
}

public function getPays() 
{
    return $this->_pays;
}

public function getCarriere() 
{
    return $this->_carriere;
}

































}