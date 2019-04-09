<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>liens fruits</title>
</head>
<body>
<!--1/effectuer 4 liens HTML pointant sur la même page avec le nom des fruits
2/faites en sorte d'envoyer 'cesire'ds l'url si on clique dessus et pareil pour les autres
3/tenter d'afficher 'cerise' sur la page web si on clique dessus on fait la même pour les autres fruits
4/envoyerl'info à la fonction calcul()afin d'afficher le prix pour 1 kg de cerise et le faire pour les autres-->
<div class="container text-center">
<h1 class="display-4 text-center">LIENS FRUITS</h1><hr>
<!--si l'indice choix est defini ds l'url càd qu'on clique sur le lien on affiche le fruit ou message d'erreur-->
<h4>Votre choix:<strong class="text-info"><?php(isset($_GET['choix']))? $_GET['choix']:"aucun fruit selectionés!";?></strong></h4> 
<!--votre choix :<strong class="text-info"><?php if(isset($_GET['choix']))echo $_GET['choix'];ese echo "aucun fruits selectionés!";?></strong></h4>-->
<?php
require_once("fonctions.php");
if(isset($_GET['choix']))
{
    echo calcul($_GET['choix'],1000);
    //on va crocheter ds l'url pr recuperer le bon fruit sur lequel on a cliqué
}
//echo calcul($_GET['choix'],1000);
?> 
<ul class="col-md-2 offset-md-5 list-group">
<li class=list-group-item><a href="?choix=cerises" class="list-group alert alert-warning">cerises</a></li>
<li class=list-group-item><a href="?choix=bananes"class="list-group alert alert-success">bananes</a></li>
<li class=list-group-item><a href="?choix=pommes"class="list-group alert alert-danger">pommes</a></li>
<li class=list-group-item><a href="?choix=peches"class="list-group alert alert-warning">peches</a></li>
 </ul>
  </div>



</body>
</html>