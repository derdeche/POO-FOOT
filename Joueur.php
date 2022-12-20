<?php

class Joueur
{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private Pays $_pays;
    private array $_carrieres;

    public function __construct(string $nom, string $prenom, string $dateNaissance, $pays)
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
        return $this->_nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    public function getDateNaissance()
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
        $dateNaissance = ($this->_dateNaissance);
        $diff = date_diff($dateNaissance, $today);
        return $diff->format("%y ans ");
    }

                                /* Mode affichage information joueur*/
    public function to__String()
    {
        return "Le nom du Joueur: ". $this->getNom()." prénom: ".$this->getPrenom()."Age: ".$this->afficherAge();
    } 

                               /*Function d'affichage information sur carriere joueur*/
    public function afficherInfo()
   {
    echo "Le nom du Joueur: ".$this;
    foreach ($this->_carrieres as $carriere)
    {
        return $carriere."<br>";
    }
   

}







































}

