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

$nom = $_GET['nom'];
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];
$zoom = $_GET['niveau de zoom'];
$icone = $_GET['icone'];
$indice = $_GET['indice'];
$id = $_GET['id'];
$saumon = mysqli_query($link, "SELECT icone FROM objet WHERE nom='saumon'");

if ($saumon) {
  while ($ligne = mysqli_fetch_object($saumon)) {
    // $ligne est un objet
    // contient par exemple $ligne->id, $ligne->nom, etc.
  }
} else {
  echo "Erreur de requête de base de données.";
}


// Test : affichage de l'objet saumon, sous forme JSON
$test = mysqli_fetch_object($saumon);
echo json_encode($test);


mysqli_close($link);

mysqli_close($link);
?>
