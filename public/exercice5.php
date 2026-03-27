<?php

// Exercice 5
// Créer un formulaire sur la page index.php avec :

// Une liste déroulante pour la civilité (Mr ou Mme)

// Un champ texte pour le nom
// Un champ texte pour le prénom

// Ce formulaire doit rediriger vers la page process/exercice5.php.
// Vous avez le choix de la méthode.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="../process/exercice5.php" method="POST">

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