<?php

//Connexion à la BDD
$link = mysqli_connect('localhost','mamp','','findmomo');

//Vérification de la connexion
if (!$link) {
  die('Erreur de connexion');
} else {
  echo 'Succès... ';
}

mysqli_set_charset($link, "utf8");

$nom = $_POST['nom'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$zoom = $_POST['niveau de zoom'];
$icone = $_FILES['icone'];
$indice = $_POST['indice'];
$id = $_POST['id'];

$saumon = mysqli_query($link, "SELECT icone FROM objet WHERE nom='saumon'");

if ($saumon) {
  while ($ligne = mysqli_fetch_object($saumon)) {
    // $ligne est un objet
    // contient par exemple $ligne->id, $ligne->nom, etc.
  }
} else {
  echo "Erreur de requête de base de données.";
}


//echo json_encode($saumon);

mysqli_close($link);
?>