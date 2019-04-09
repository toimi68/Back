<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Coockie PHP</title>
</head>
<body>

<div class="container text-center">
   <h1 class="display-4 text-center">COOCKIE PHP</h1><hr>
   
   <?php
   if(isset($_GET['pays'] ))//On entre dans la condition lorsqu'on rentrere sur un lien
   {
       $pays = $_GET ['pays'];
   }
   elseif(isset($_COOKIE['pays'] ))//Si je quitte et que je reviens 6 mois plus tard, c'est mon coockie qui agira
   {
       $pays =$_COOKIE['pays'];
   }
   else //On entre le caselse lors de la premiere visite sur le site lorsqu'aucun coockie n'est créé
   {
       $pays = 'fr';
   }
   //-------------------------------------------------------FIN DU SCRIPT-----------------------------------
   //Création fichier coockie
   $un_an = 365*24*3600; //correspond à une année en seconde, on saura la durée de vie du coockie
   
   setcookie("pays", $pays, time() + $un_an);
   //Permet de créer un fichier coockie qui sera conservé côté client, c'est à dire dans un ordinateur 
   //setcoockie demande trois arguiemnts : nom du coockie, sa valeur, et sa durée de vie

   echo '<pre>'; print_r($_COOKIE);  echo '</pre>';
   switch($pays)
   {
     case 'fr':
         echo "Vous êtes sur un site en français<br>";
         break;
     case 'es':
         echo "Vous êtes sur un site en espagnol<br>";
         break;
     case 'en':
         echo "Vous êtes sur un site en engalais<br>";
         break;
     case 'it':
         echo "Vous êtes sur un site en italien<br>";
         break;




   }






   ?>
   
   
   
   
   
   <h2>Votre langue</h2>

    <ul class="list-group">
       <li class="list-group-item"><a href="?pays=fr">France</a></li>
       <li class="list-group-item"><a href="?pays=es">Espagne</a></li>
       <li class="list-group-item"><a href="?pays=en">Angleterre</a></li>
       <li class="list-group-item"><a href="?pays=it">Italie</a></li>
   
    </ul>









 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>