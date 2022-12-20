<h1>POO-FOOT</h1>

<P>Soit une application qui gère des équipes de football<br>
Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) et un ensemble de joueurs identifié par un prénom, un nom et une date de naissance<br>

Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, Espagne, Allemagne, ...)<br>

Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison)<br>
Concevez le projet en POO de façon à :<br>

- lister toutes les équipes d'un pays<br>

    Ex : France --> PSG, OM, OL, RCSA, ...<br>

- lister tous les joueur s d'une équipe (avec nom, prénom, âge et pays d'origine)<br>

    Ex : PSG --> Neymar JR (30 ans), Lionel Messi (35 ans), Kylian Mbappé (23 ans)<br>

- lister toutes les équipes d'un joueur<br>

    Ex : Lionel Messi (FC Barcelone 2004, PSG 2021)</P>

    <h2>Résultat</h2>

    <?php
 
    spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

    });

    $pays1 = new Pays("France");
    $pays2 = new Pays("Espagne");
    $pays3 = new Pays("Angleterre");

    $equipe1 = new Equipe("Paris Saint-Germain","france");
    $equipe2 = new Equipe("FC Barcelone","espagne");
    $equipe3 = new Equipe("Liverpool", "Angleterre" );

    
    $joueur1 = new joueur("Messi","lionel","24 juin 1987",$pays1,$carriere1);
    $joueur2 = new joueur("Lewandowski","Robert","21 août 1988",$pays2,$carriere2);
    $joueur3 = new joueur("Alcantara","Tiago","11 avril 1991",$pays3,$carriere3);
    
    $carriere1 = new Carriere("Paris Saint-Germain",$joueur1,2020);
    $carriere2 = new Carriere("Fc Barcelone",$joueur2,2021);
    $carriere3 = new Carriere("Liverpool",$joueur3,2019);

    /*$joueur1->afficherInfo();*/

    //$joueur1->afficherInfo();
    $equipe1->afficherInfoEquipe();
    
 





