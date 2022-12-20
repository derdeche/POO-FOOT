<?php

class Joueur
{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private Pays $_pays;
    private array $_carrieres;

    public function __construct(string $nom, string $prenom, string $dateNaissance, Pays $pays)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
        $this->_pays = $pays;
        $this->_pays->addJoueur($this);
        $this->_carrieres = [];
    }

    public function addCarriere($Carriere)
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

    public function afficherAge()
    {
        $today= new DateTime();
        $Anniversaire = ($this->_dateNaissance);
        $diff = date_diff($dateNaissance, $today);
        return $diff->format("%y ans ");
    }

    public function to__String()
    {
        return "Le nom du Joueur: ". $this->getNom()." prénom: ".$this->getPrenom(). "Date de Naissance: ".$this->getdateNaisance()."Age: ".$this->_afficherAge();
    } 

    public function afficherInfo()
   {
    echo "Le nom du Joueur: ".$this;
    foreach ($this->_carrieres as $carriere)
    {
        return $carriere."<br>";
    }
   











}







































}

