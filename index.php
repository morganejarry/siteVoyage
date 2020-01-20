<?php
require_once 'functions.php';

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site Voyages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="headerIndex">VOICI LA LISTE DE NOS DIFFERENTS VOYAGES :</h1>
    <img class="backgroundHeader" src="img/background.jpg">
    
    <?php
		$bdd_voyages = listeVoyages();
		foreach($bdd_voyages as $voyage){
            ?>
            <ul class="listeVoyages">
            <a href=<?= linkVoyage($voyage['id_voyage']); ?>><li class="puceVoyage"><?= $voyage['titre'];?></li></a>
            </ul>
            
            <?php
            
        }     
        ?>
        <a href=<?= linkCreateVoyage(); ?>><button class="buttonAjout">Ajouter un voyage</button></a>
      
</body>
</html>