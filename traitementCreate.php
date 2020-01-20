<?php
require_once 'functions.php';

$path = pathinfo($_FILES['img']['name']);
$filename =  htmlentities($path['filename'].uniqid() . '.' .$path['extension']);

move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $filename);

createVoyage($_POST, $filename);

header('Location: http://localhost/siteVoyagePhp/');
?>