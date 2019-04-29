<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
 crossorigin="anonymous">
    <title>formulaire entreprise</title>
</head>
<body>
<?php
//reponse :exo-2 
echo '<pre>';print_r($_POST);echo '</pre>';
//EXO-3
$bdd =new PDO ('mysql:host=localhost;dbname=entreprise','root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
//exo:4
if($_POST)
{
    $resultat =$bdd->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES ('$_POST[prenom]','$_POST[nom]','$_POST[sexe]','$_POST[service]','$_POST[date_embauche]','$_POST[salaire]')");
//on utilise la super globale $_POST pour aller crocheter à chaque champ du formulaire afin de recuperer sa valeur
echo '<div class="col-md-6 offset-md-3 alert alert-success text-center">
L\'employe <strong>'.$_POST['nom'].'</strong>a bien enregistré!!</div>';
}
?>
     <!-- //1/realiser un formulaire correspondant à la table 'employes'de la BDD 'entreprise'sauf id_employes
    // 2/controler en php que l'on controle bien tous les champs du formulaire
    // 3/connexion BDD
    // 4/traitement PHP SQL  permettant l'insertion d'un employe à partir dub formulaire--> -->
<h1 class="display-4 text-center">formulaire entreprise</h1>
<form class="col-md-4 offset-md-4" method="post" action=""> 
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter prenom">
        </div>
<div class="form-group">
            <label for="nom">nom</label>
            <input type="nom" class="form-control" id="nom" name="nom" placeholder="nom">
            </div>
        <div class="form-group">
            <label for="sexe">genre</label>
            <input type="sexe" class="form-control" id="sexe" name="sexe" placeholder="genre">
        </div>
        
        
        <div class="form-group">
            <label for="">service</label>
            <input type="text" class="form-control" id="service" name="service" placeholder="Enter service">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">salaire</label>
            <input type="text" class="form-control" id="salaire" name="salaire" placeholder="salaire">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">date d'embauche</label>
            <input type="date" class="form-control" id="date_embauche" name="date_embauche" placeholder="date d'embauche">
        </div>
        
        <button type="submit" class="btn btn-dark">Valider</button>
    </form>
</body>
</html>













</body>
</html>