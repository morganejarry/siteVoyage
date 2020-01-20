<?php
require_once 'functions.php';


$path = pathinfo($_FILES['img']['name']);
$filename =  htmlentities($path['filename'].uniqid() . '.' .$path['extension']);
var_dump($path);
move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $filename);

editVoyage($_POST, $filename);

header('Location: http://localhost/siteVoyagePhp/affichage.php?voyageid=' . $_POST['id_voyage']);

?>