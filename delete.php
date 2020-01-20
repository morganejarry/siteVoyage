<?php
require_once 'functions.php';
$image = getImage($_GET['voyage_id']);
unlink('img/' . $img);
deleteVoyage($_GET['voyageid']);
header('Location: http://localhost/siteVoyagePhp/');
?>