<?php

class Pays 
{
    private string $_pays;
    private array $_cariere;


public function __construct(string $pays) 
{
    $this->_pays = $pays;
    $this->_cariere = [];
}

public function addCariere(string $cariere) 
{
    $this->_cariere[] = $cariere;
    return $this;
}

public function getPays() 
{
    return $this->_pays;
}

public function getCariere() 
{
    return $this->_cariere;
}
























}