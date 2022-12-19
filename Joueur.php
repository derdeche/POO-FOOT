<?php

class Joueur
{
    private string $_Nom;
    private string $_Prenom;
    private string $_DateNaissance;
    private Pays $_Pays;
    private array $_Carriere;

    public function __construct(string $Nom, string $Prenom, string $DateNaissance, Pays $Pays)
    {
        $this->_Nom = $Nom;
        $this->_Prenom = $Prenom;
        $this->_DateNaissance = $DateNaissance;
        $this->_Pays = $Pays;
        $this->_Pays->ADDJoueur($this);
        $this->_Carriere = [];
    }

    public function ADDCarriere($Carriere)
    {
        $this->_Carriere[] = $Carriere;
    }

    public function getNom(): string
    {
        return $this->_Nom;
    }

    public function getPrenom(): string
    {
        return $this->_Prenom;
    }

    public function getDateNaissance(): string
    {
        return $this->_DateNaissance;
    }

    public function getPays(): string
    {
        return $this->_Pays;
    }








































}

