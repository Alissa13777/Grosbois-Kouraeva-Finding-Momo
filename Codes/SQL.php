<?php
include('connect.php');

$temps = $_POST["temps2"].":".$_POST["temps3"].":".$_POST["temps4"];
$pseudo = $_POST['temps5'];
$score = $_POST['temps'];

$sql = "INSERT INTO user(pseudo,temps,score) VALUES ('$pseudo','$temps','$score')";
$result = mysqli_query($link,$sql);

?>




