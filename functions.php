<?php

// FONCTIONS CONNECTION BDD
function connect(){
    try {
        return  new PDO('mysql:host=localhost:3308;dbname=voyages;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }
}

// FONCTIONS LISTE VOYAGE
function listeVoyages(){
	$bdd = connect(); 

	return $bdd->query('SELECT titre, id_voyage FROM voyages');
}

function linkVoyage($id_voyage){

	return '"affichage.php?voyageid=' . $id_voyage . '"';
}

// FONCTIONS GET VOYAGE
function getVoyage($id_voyage){
	$bdd = connect();

	$request = $bdd->prepare('SELECT * FROM voyages WHERE id_voyage = :id_voyage ');

	$request->execute(array(':id_voyage' => $id_voyage));

	return $request->fetch(PDO::FETCH_ASSOC);
}

// FONCTIONS CREER VOYAGE
function linkCreateVoyage(){
	return '"create.php"';
}

function createVoyage($arrayInfosCreation, $valuefilename){
	$bdd = connect(); 

	$request = $bdd->prepare('INSERT INTO voyages
	(titre, img, paragraphe_1, paragraphe_2, paragraphe_3, sous_titre_1, sous_titre_2, sous_titre_3, duree, destination) 
	VALUES (:titre, :img, :paragraphe_1, :paragraphe_2, :paragraphe_3, :sous_titre_1, :sous_titre_2, :sous_titre_3, :duree, :destination);');

	$request->execute(array(
	':titre' => htmlentities($arrayInfosCreation['titre']),
	':img' => $valuefilename,
	':paragraphe_1' => htmlentities($arrayInfosCreation['paragraphe_1']),
	':paragraphe_2' => htmlentities($arrayInfosCreation['paragraphe_2']),
	':paragraphe_3' => htmlentities($arrayInfosCreation['paragraphe_3']),
	':sous_titre_1' => htmlentities($arrayInfosCreation['sous_titre_1']),
	':sous_titre_2' => htmlentities($arrayInfosCreation['sous_titre_2']),
	':sous_titre_3' => htmlentities($arrayInfosCreation['sous_titre_3']),
	':duree' => htmlentities($arrayInfosCreation['duree']),
	':destination' => htmlentities($arrayInfosCreation['destination'])));
}

// FONCTIONS MODIFIER VOYAGE
function linkEditVoyage($voyageid){
	return '"edit.php?voyageid=' . $voyageid . '"';
}

function editVoyage($arrayInfosEdit, $valuefilename){
	$bdd = connect(); 

	$request = $bdd->prepare('UPDATE voyages SET
	titre = :titre,
	img = :img,
	paragraphe_1 = :paragraphe_1,
	paragraphe_2 = :paragraphe_2,
	paragraphe_3 = :paragraphe_3,
	sous_titre_1 = :sous_titre_1,
	sous_titre_2 = :sous_titre_2,
	sous_titre_3 = :sous_titre_3,
	duree = :duree,
	destination = :destination
	WHERE id_voyage = :id_voyage');

	$request->execute(array(
	':titre' => htmlentities($arrayInfosEdit['titre']),
	':img' => $valuefilename,
	':paragraphe_1' => htmlentities($arrayInfosEdit['paragraphe_1']),
	':paragraphe_2' => htmlentities($arrayInfosEdit['paragraphe_2']),
	':paragraphe_3' => htmlentities($arrayInfosEdit['paragraphe_3']),
	':sous_titre_1' => htmlentities($arrayInfosEdit['sous_titre_1']),
	':sous_titre_2' => htmlentities($arrayInfosEdit['sous_titre_2']),
	':sous_titre_3' => htmlentities($arrayInfosEdit['sous_titre_3']),
	':duree' => htmlentities($arrayInfosEdit['duree']),
	':destination' => htmlentities($arrayInfosEdit['destination']),
	':id_voyage' => htmlentities($arrayInfosEdit['id_voyage'])));	
}

// FONCTIONS SUPPRIMER VOYAGE

function linkDeleteVoyage($id_voyage){
	return '"delete.php?voyageid=' . $id_voyage . '"';
}

function deleteVoyage($id_voyage){
	$bdd = connect();

	$request = $bdd->prepare('DELETE FROM voyages WHERE id_voyage = :id_voyage ');

	$request->execute(array(':id_voyage' => $id_voyage));
}

function getImage($id_voyage){
	$bdd = connect();

	$request = $bdd->prepare('SELECT img FROM voyages WHERE id_voyage = :id_voyage ');

	$request->execute(array(':id_voyage' => $id_voyage));
	
	$result = $request->fetch(PDO::FETCH_ASSOC);
	return $result['img'];
}

?>