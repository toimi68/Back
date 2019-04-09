<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
    <title>lecture fichier text</title>
</head>
<body>
<?php

//puisque ns avons reussi à introduire des infos ds fichier.txt il serait interessant de faire l'inverse 
//et de lire le contenu dun fichier
$nom_fichier ="liste.txt";
$fichier = file($nom_fichier);//la fonct° file fait tt le travail ,elle retourne chaque ligne du fichier à des indices differents
//d'un tableau Array
echo '<pre>';print_r($fichier);echo '</pre>';
?>    
</body>
</html>