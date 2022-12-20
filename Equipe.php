<?php

class Equipe
{
    private $_equipe;
    private Pays $_pays;
    private array $_carriere;


public function __construct(string $equipe, Pays $pays)
{
    $this->_equipe = $equipe;
    $this->_pays = $pays;
    $this->_pays->addEquipe($this);
    $this->_carrieres = [];
}

public function addCarriere(Carriere $carriere) 
{
    $this->_carriere[] = $carriere;
    
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

public function to__String() 
{
    return $this->getEquipe().$this->getPays().$this->getCarriere();
}
           
                      /*function permet d'afficher les informations d'une equipe*/

public function afficherInfoEquipe()
{
    echo  $this." <br>";
    foreach ($this->_carrieres as $carriere) 
    {
        echo $carriere."<br>";
    }
}
































}