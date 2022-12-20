<?php

class Cariere
{
    private int $_datedebut;
    private Equipe $_equipe;
    private Joueur $_joueur;

public function __construct(int $datedebut,$equipe, $joueur)
{
    $this->_datedebut = $datedebut;
    $this->_equipe = $equipe;
    $this->_joueur = $joueur;
    $this->_equipe->addCariere($this);
    $this->_joueur->addCariere($this);
}

public function getDatedebut()
{
    return $this->_datedebut;
}

public function getEquipe()
{
    return $this->_equipe;
}

public function getJoueur()
{
    return $this->_joueur;
}





















}