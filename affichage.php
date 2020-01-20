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
    <?php

        $voyage = getVoyage($_GET["voyageid"]);

    ?>
            <h2><?= $voyage['titre'];?></h2>
            <img src="img/<?= $voyage['img'];?>">
            <h5><?= $voyage['sous_titre_1'];?></h5>
            <h5><?= $voyage['sous_titre_2'];?></h5>
            <h5><?= $voyage['sous_titre_3'];?></h5>
            <p><?= $voyage['paragraphe_1'];?></p>
            <p><?= $voyage['paragraphe_2'];?></p>
            <p><?= $voyage['paragraphe_3'];?></p>
            <p>Ce voyage est d'une durée de <?= $voyage['duree'];?> jours, à destination de <?= $voyage['destination'];?> </p>

            <a href=<?= linkEditVoyage($_GET["voyageid"]); ?>><button>Modifier</button></a>
            <a href=<?= linkDeleteVoyage($_GET["voyageid"]); ?>><button>Supprimer</button></a>
    <?php

    ?>
</body>
</html>