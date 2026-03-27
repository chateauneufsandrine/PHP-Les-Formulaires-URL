<?php 
// var_dump($_POST);



// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../public/exercice5.php?error=bad-method");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
if (!isset($_POST["prenom"]) || !isset($_POST["nom"]) || !isset($_POST["civilite"])) {
    header("Location: ../public/exercice5.php?error=missing-input");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
if (empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["civilite"])) {
    header("Location: ../public/exercice5.php?error=missing-value");
    exit();
}

// Input Sanitization
$prenom = htmlspecialchars(trim($_POST["prenom"]));
$nom = htmlspecialchars(trim($_POST["nom"]));
$civilite = htmlspecialchars(trim($_POST["civilite"]));

// On vérifie que les règles d'usages sont respectées
if (strlen($prenom) > 50) {
    header("Location: ../public/exercice5.php?error=max-length");
    exit();
}

var_dump($prenom);
var_dump($nom );
var_dump($civilite );
?>






