<?php

// Exercice 6
// Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, 
// le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
// Utiliser qu'une seule page.





// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] === "POST") {



    // On vérifie qu'on a bien reçu tous les inputs
    if (!isset($_POST["prenom"]) || !isset($_POST["nom"]) || !isset($_POST["civilite"])) {
        header("Location: ../public/exercice6.php?error=missing-input");
        exit();
    }

    // On vérifie qu'un des champs n'est pas vide
    if (empty($_POST["prenom"]) || empty($_POST["nom"]) || empty($_POST["civilite"])) {
        header("Location: ../public/exercice6.php?error=missing-value");
        exit();
    }

    // Input Sanitization
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $civilite = htmlspecialchars(trim($_POST["civilite"]));

    // On vérifie que les règles d'usages sont respectées
    if (strlen($prenom) > 50) {
        header("Location: ../public/exercice6.php?error=max-length");
        exit();
    }

    var_dump($prenom);
    var_dump($nom);
    var_dump($civilite);
} else {
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        <label for="civilite"></label>
        <select name="civilite" id="civilite">
            <option value="">--Civilité</option>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>

        <label for="nom">Quel est ton nom ?</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Quel est ton prénom ?</label>
        <input type="text" id="prenom" name="prenom">

        <button type="submit">Envoyez</button>

    </form>

</body>

</html>
<?php } ?>