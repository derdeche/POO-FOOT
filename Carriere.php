<?php

class Carriere
{
    private  Joueur $_joueur;
    private  Equipe $_equipe;
    private int $_datedebut;
    
public function __construct(Equipe $equipe,Joueur $joueur, $datedebut)
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
                            /*Function permet d'afficher les joueurs d'une équipe*/
public function __toString()
{
    return " Equipe : " .$this->getEquipe()."//".$this->getJoueur()." ". "Date de Début : " . $this->getDatedebut();
}





















}