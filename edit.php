<?php
require_once 'functions.php';
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voyage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Ajouter un Voyage</h1>
    <form action="traitementEdit.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="titre">Titre : </label>
            <input type="text" id="titre" name="titre" required="required">
        </div>
        <div>
            <label for="img">Image : </label>
            <input type="file" id="img" name="img">
        </div>
        <div>
            <label for="sous_titre_1">Sous-titre 1 : </label>
            <input type="text" id="sous_titre_1" name="sous_titre_1">
        </div>
        <div>
            <label for="sous_titre_2">Sous-titre 2 : </label>
            <input type="text" id="sous_titre_2" name="sous_titre_2">
        </div>
        <div>
            <label for="sous_titre_3">Sous-titre 3 : </label>
            <input type="text" id="sous_titre_3" name="sous_titre_3">
        </div>
        <div>
            <label for="paragraphe_1">Paragraphe 1 : </label>
            <input type="text" id="paragraphe_1" name="paragraphe_1">
        </div>
        <div>
            <label for="paragraphe_2">Paragraphe 2 : </label>
            <input type="text" id="paragraphe_2" name="paragraphe_2">
        </div>
        <div>
            <label for="paragraphe_3">Paragraphe 3 : </label>
            <input type="text" id="paragraphe_3" name="paragraphe_3">
        </div>
        <div>
            <label for="duree">Durée : </label>
            <input type="text" id="duree" name="duree" required="required">
        </div>
        <div>
            <label for="destination">Destination : </label>
            <input type="text" id="destination" name="destination" required="required">
        </div>
            <input type="hidden" id="id_voyage" name="id_voyage" value="<?= $_GET['voyageid']?>">
        <div class="button">
            <button type="submit">Modifier le voyage</button>
        </div>
    </form>
</body>
</html>