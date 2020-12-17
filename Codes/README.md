PROJET WEB

Find’IGN Momo est un jeu d’escape game géographique, réalisé lors d’un projet web. Le but de ce jeu est de retrouver Momo, la mascotte du BDE Pingou’IGN, qui a été enfermée dans un igloo par les méchants Tibo Petsen et Lora Wenksen. Pour cela, le joueur va devoir trouver différents objets dispersés en Norvège.

Auteurs : Alissa Kouraeva et Maxime Grosbois


Installation :

Pour jouer à Find’IGN Momo, il vous faut :
- le logiciel MAMP
- créer une nouvelle base de données appelée « findmomo » dans phpmyadmin
- importer le fichier objet.sql et user.sql

Pour la base de données, vérifiez que vous avez bien les paramètres suivants :

database : findmomo
host : localhost
user : mamp

N.B : le mot de passe n’est pas exigé. Mais il vaut mieux vérifier la configuration 
de MAMP sur votre machine avant le lancer le jeu, car il se peut qu'un mot de passe 
soit nécessaire.

Version des logiciels utilisés :
MAMP :
- PHP Version 7.4.9
- MySQL Version 5.7.30



Solutions :

1. Le premier « couple » d’objets (Tibo&Lora - saumon) se situe à Oslo.
2. Le deuxième « couple » d’objets (ours - code) se situe à Trondheim.
3. Le dernier « couple » d’objets (maison - feu) se situe à Bergen.
Il faut ensuite retourner à l’igloo du début (situé à Kirkenes) pour sauver Momo, utilisant le feu pour brûler la glace.


Correspondance du code et des actions:

Le premier bouton start permet de récupérer le pseudo du user. Il faut ensuite appuyer une deuxième fois sur le bouton start pour lancer le jeu et le chronomètre. 
La carte est centrée sur l'igloo qui donne les premières instructions. Les boutons "récupérer ***" permettent de récupérer les objets dans l'inventaire du joueur.
Des boutons comme "Nourrissez-moi" permettent d'enlever des objets de l'inventaire pour en débloquer d'autres et continuer le jeu. 


