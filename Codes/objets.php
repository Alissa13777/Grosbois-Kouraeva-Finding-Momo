<!DOCTYPE html>
<html lang="en">

<audio controls autoplay loop hidden>
        <source src="Out of the Cold.mp3" type="audio/mpeg" autostart="true">
</audio><br />

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
    <link rel="icon" href="penguin.png" type="image/png">
</head>


<body>
<div id="contenu">

<div id="titre">
    
<img src="momo.png" width="80" height="100"> FIND'IGN MOMO <img src="momo.png" width="80" height="100">
</div>

<div id="consigne">
    <strong>Panique en Norvège !</strong><br>
    <div id="sous-consigne">J'ai capturé Momo (venue visiter ses cousins éloignés) sous la glace gnark gnark gnark! 
        Votre mission si vous l'acceptez vous sera donnée en cliquant sur l'igloo! 
    </div>

    <div id="consigne_start">
    Cliquez sur le bouton "START" pour activer le jeu et
     "END" une fois que vous aurez libéré Momo: 
    </div>
</div>

    <button id="bouton1" class="start">START</button>
    
    <form id="form" action="fin.php" method="POST">
        <input type="hidden" id="test" value="" name="temps" >
        <input type="hidden" id="test2" value="" name="temps2" >
        <input type="hidden" id="test3" value="" name="temps3" >
        <input type="hidden" id="test4" value="" name="temps4" >
        <input type="hidden" id="test5" value="" name="temps5" >
        
        <button id="bouton2" class="start">END</button>
    </form>
    
    


<div id ="scores">
        <ul>Hall of fame</ul>
        <ul> <div id="divpseudo"><?php if (isset( $_POST["pseudo"])){ echo $_POST["pseudo"]; } ?>  </div> </ul>
        <ul>
            <div class="timer"> 
                temps : <span class="minutes">00</span>:<span class="seconds">00</span>:<span class="centiseconds">00</span><br>
                score : <span class="result"> 10000 </span>
                
            </div> 
        </ul>
</div>



<div id="map">

</div>
<!--création de l'inventaire pour les objets et codes récupérés-->
<div id="objets">
    <div id="obj_recup">     
        INVENTAIRE
        <div id="inventaire_saumon">
        </div>
        <div id="inventaire_code">
            Rentrez le code pour vous en souvenir:
        </div>
        <div id="inventaire_feu">
        </div>
        <?php
        ?>
    </div>
    
</div>


</div>

<script src ="carte.js"> javascript </script>


</body>
</html>