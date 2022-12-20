<?php

class Carriere
{
    private Equipe $_equipe;
    private Joueur $_joueur;
    private int $_datedebut;
    
public function __construct($equipe, $joueur,int $datedebut)
{
    $this->_equipe = $equipe;
    $this->_joueur = $joueur;
    $this->_datedebut = $datedebut;
    $this->_equipe->addCarriere($this);
    $this->_joueur->addCarriere($this);
}


public function getEquipe()
{
    return $this->_equipe;
}

public function getJoueur()
{
    return $this->_joueur;
}

public function getDatedebut()
{
    return $this->_datedebut;
}

public function getCarriere()
{
    return $this->_carriere;
}

public function __toString()
{
    return $this->getEquipe().$this->getJoueur().$this->getDatedebut();
}





















}