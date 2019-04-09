<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire4</title>
</head>
<body>
<h1 class="display-4 text-center">Formulaire4</h1><hr>

<?php
//echo '<pre>';print_r($_POST);echo '<pre>';
echo '<div class="col-md-2 offset-md-5 alert alert-success text-center mx-auto>';
foreach($_POST as $key => $value)
{
    echo "$key : $value<br>";
}
echo '</div>' ;
//Exo si ns n'avions pas de BDD et que ns voulons recuperer les emails des visiteurs du site  il serait interessant de les recuperer ds un fichier txt
//voila les fonct° qui permettent ça
//fopen() / fwrite() / fclose() /
$fichier = fopen("liste.txt","a");//en mode 'a' permet de créer le fichier s'il n'est pas retrouvé sinon l'ouvrir
fwrite($fichier,$_POST['pseudo'].'_'.$_POST['email']."\r\n");//=>sequence d'échappement pr passer à la liogne ds le fichier
fclose($fichier);//n'est pas indispensable permet de fermer les fichiers pr liberer ressources


?>
   
</body>
</html>