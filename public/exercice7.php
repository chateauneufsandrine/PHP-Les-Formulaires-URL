<?php

// Exercice 7
// Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. 
// Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../process/exercice7.php" method="POST" enctype="multipart/form-data" accept="application/pdf">

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

        <label for="fichier">Document</label>
        <input type="file" id="fichier" name="fichier">


        <button type="submit">Envoyez</button>

    </form>


</body>

</html>