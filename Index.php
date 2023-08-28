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

$pays1 = new Pays('France');
$pays2 = new Pays('Espagne');
$pays3 = new Pays('Angleterre');
$pays4 = new Pays('USA');

$equipe1 = new Equipe(' Paris Saint-Germain', $pays1);
$equipe2 = new Equipe(' FC Barcelone', $pays2);
$equipe3 = new Equipe(' Liverpool', $pays3);
$equipe4 = new Equipe(' Miami', $pays4);


$joueur1 = new joueur('Messi', 'lionel', '1987-06-24', $pays1);
$joueur2 = new joueur('Lewandowski', ' Robert', '1988-08-21', $pays2);
$joueur3 = new joueur('Alcantara', ' Tiago', '1991-08-11', $pays3);

$carriere1 = new Carriere($equipe1, $joueur1,' 2020');
$carriere2 = new Carriere($equipe2, $joueur2, ' 2021');
$carriere3 = new Carriere($equipe3, $joueur3,' 2019');
$carriere4 = new Carriere($equipe4, $joueur1,' 2023');

echo $joueur1."<br>";
echo $joueur2."<br>";
echo $joueur3."<br>";
echo "************************************************************************************************"."<br>";
echo "LISTE DES EQUIPES D'UN PAYS :"."<br>";
$pays1->afficherEquipe(); 
$pays2->afficherEquipe();
$pays3->afficherEquipe();   
echo "************************************************************************************************"."<br>";
echo "LISTE DES JOUEURS D'UNE EQUIPE :"."<br>";
echo $carriere1."<br>";
echo $carriere2."<br>";
echo $carriere3."<br>";
echo $carriere4."<br>";
echo "************************************************************************************************"."<br>";
echo "LISTE DE TOUTES LES EQUIPES D'UN JOUEUR :"."<br>";
$joueur1->afficherInfo();
$joueur2->afficherInfo();
$joueur3->afficherInfo();

