<?php

// Exercice 2
// Créer un formulaire demandant le nom et le prénom. 
// Ce formulaire doit rediriger vers la page exercice2.php avec la méthode POST.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../process/exercice2.php" method="POST">

        <label for="nom">Quel est ton nom ?</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Quel est ton prénom ?</label>
        <input type="text" id="prenom" name="prenom">

        <button type="submit">Envoyez</button>



    </form>
</body>

</html>