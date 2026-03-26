<?php

// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    echo("ce n'est pas la bonne methode");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (!isset($_GET["nom"]) || !isset($_GET["prenom"])) {
    echo("il manque un parametre");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
if (empty($_GET["nom"]) || empty($_GET["prenom"])) {
    echo("le champ est vide");
    exit();
}

// Input Sanitization
$prenom = htmlspecialchars(trim($_GET["prenom"]));
$nom = htmlspecialchars(trim($_GET["nom"]));

var_dump($prenom);
var_dump($nom );

?>


