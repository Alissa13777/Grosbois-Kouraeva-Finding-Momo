<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style_carte.css" />
    <link rel="stylesheet" href= "style_game.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <title>Find'IGN Momo</title>
    <link rel="icon" href="penguin.jpg" type="image/jpg">
</head>
<body>




<div id="contenu">

<?php
  include('SQL.php');
?>


<table id='tableau'>
    <tr>
        <th>Pseudo</th>
        <th>Temps</th>
        <th>Score</th>
    </tr>

</table>


<div id="titre">
<img src="momo.png" width="80" height="100"> FIND'IGN MOMO <img src="momo.png" width="80" height="100">
</div>


<div id ="scores">
    <ul>Hall of fame</ul>
    
    <ul>
        <div class="timer"> 
            Votre pseudo : <?php echo $_POST["temps5"]?> <br>
            Votre temps :  <?php echo $_POST["temps2"]?> : <?php echo $_POST["temps3"]?> : <?php echo $_POST["temps4"]?> <br>
            Votre score : <?php echo $_POST["temps"]?> 
         </div>  
    </ul>
</div>

<script src ="carte.js"> javascript </script>
<script type="text/javascript"  src="halloffame.js"></script>

</body>
</html>