<?php//EXO afficher le prix de 2 kg de banane en executant la fonction 'calcul()'sans la copier coller ou la changer
require_once('fonction.php');//ou on peut faire: include_once('fonction.php);
echo calcul('bananes',2000); 
//require permet d'importer les fichiers fonction.php, directement sur la page 'appel.php'