<?php 
var_dump($_POST);
var_dump($_FILES);



// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../public/exercice7.php?error=bad-method");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (!isset($_POST["prenom"]) || !isset($_POST["nom"]) || !isset($_POST["civilite"]) || !isset($_FILES["fichier"])) {
    header("Location: ../public/exercice7.php?error=missing-input");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
if (empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["civilite"]) || empty($_FILES["fichier"])) {
    header("Location: ../public/exercice7.php?error=missing-value");
    exit();
}

// Input Sanitization
$prenom = htmlspecialchars(trim($_POST["prenom"]));
$nom = htmlspecialchars(trim($_POST["nom"]));
$civilite = htmlspecialchars(trim($_POST["civilite"]));
$fichier=  htmlspecialchars(trim($_FILES["fichier"]["name"]));

// On vérifie que les règles d'usages sont respectées
if (strlen($prenom) > 50) {
    header("Location: ../public/exercice7.php?error=max-length");
    exit();
}

var_dump($prenom);
var_dump($nom );
var_dump($civilite );
var_dump($fichier);
var_dump(pathinfo($fichier, PATHINFO_EXTENSION));
?>