<?php

class Joueur
{
    private string $_nom;
    private string $_prenom;
    private  dateTime $_dateNaissance;
    private Pays $_pays;
    private array $_carriere;

    public function __construct(string $nom, string $prenom, $dateNaissance, $pays)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime ($dateNaissance);
        $this->_pays = $pays;
        $this->_pays->addJoueur($this);
        $this->_carrieres = [];
    }

    public function addCarriere(carriere $carriere)
    {
        $this->_carriere[] = $carriere;
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
        return $this->_dateNaissance;
    }

    public function getPays(): string
    {
        return $this->_Pays;
    }

    public function afficherAge()
    {
        $today= new DateTime();
        //$age = $today->diff($this->_dateNaissance)->y;
        $age = $this->_dateNaissance->diff($today);
        return $age->format("%y ans ");
    }

                                /* Mode affichage information joueur*/
    public function to__String()
    {
        return "Le nom du Joueur: ". $this->getNom()." prénom: ".$this->getPrenom()."Age: ".$this->afficherAge();
    } 

                               /*Function d'affichage information sur carriere joueur*/
    public function afficherInfo()
   {
        $result="";
       foreach ($this->_carrieres as $carriere)
       {
        
        $result .="Le nom du Joueur: ".$carriere->getEquipe()." prénom: ".$carriere->getJoueur()."Age: ".$carriere->getDatedebut();
        
    }
    return  $result;
   

}







































}

