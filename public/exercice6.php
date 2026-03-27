<?php 

// Exercice 6
// Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, 
// le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
// Utiliser qu'une seule page.

var_dump($_POST);
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


