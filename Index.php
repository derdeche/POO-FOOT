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

    require_once "Joueur.php";
    require_once "Pays.php";
    require_once "Equipe.php";
    require_once "Carriere.php";

    


