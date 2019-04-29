<?php
echo'<pre style="background:black;color:#fff;">';
 echo var_dump($_POST);
 echo'</pre>';
 
 //var de msg
$nomError="";
$preError="";
$clsError="";
$telError="";
$prtError="";
 $msgSuccess="";
 //verif FROM
extract($_POST);

 if($_POST){
if(empty($prenom)||iconv_strlen($prenom)<3||iconv_strlen($prenom)>50)
{
$preError.='<small class="text-danger">saisi un prenom entre 3 et 20 caracteres</small>';
}
if(empty($nom)||iconv_strlen($nom)<3||iconv_strlen($nom)>50)
{
$nomError.='<small class="text-danger">saisi un nom entre 3 et 20 caracteres</small>';
}

if(empty($_classe)||iconv_strlen($_classe)<4||iconv_strlen($_classe)>80)
{
$claError.='<small class="text-danger">saisi un prenom entre 3 et 20 caracteres</small>';
}
if(empty($parents)||iconv_strlen($parents)<10||iconv_strlen($parents)>100)
{
$prtError.='<small class="text-danger">il faut 10, min et 100 max/small>';
}
if(!preg_match('#¨[0-9](10)+$#',$telephone))
{
$telError .='<small class="text-danger">saisi un numero de telephone valide</small>';
}

 }
//fin if($_POST)

//inserer en BDD si pas d'erreur
if(empty($nomError)&& empty ($preError)&&empty($prt)&&empty($claError)&&empty($telError))
{
    //je me connecte
$bdd = new pdo(
    "mysql:host=localhost;dbname=eleve",
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);
  $newEleve = $bdd->prepare("INSERT INTO eleve (nom,prenom,classe,parents,telephone) VALUES (:nom,:prenom,:classe,:parents,:telephone)");
 foreach($_POST as $key =>$value){
     $newEleve -> bindvalue(":$key",$value,PDO::PARAM_STR);
 }
$newEleve->execute();
$msgSuccess .='<div class="alert alert-success">L\eleve bien enregistré</div>';
 
}

echo '<pre>';echo var_dump($_POST);echo '</pre>';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>formulaire Eleve</title>
</head>
<body>

<!--j'insere en BDD-->
 <?php
 
?>
<!--on glisse la variable msgError pour verifier-->
  <form method="POST">
            <?php echo $msgSuccess; ?>
            <div class="row">
                <div class="col mb-3">
                    <?php echo $nomError; ?>
                    <input type="text" class="form-control" placeholder="Nom de l'élève" name="nom">
                </div>
                <div class="col mb-3">
                    <?php echo $preError; ?>
                    <input type="text" class="form-control" placeholder="Prénom de l'élève" name="prenom">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <?php echo $clsError; ?>
                    <input type="text" class="form-control" placeholder="classe" name="classe">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $prtError; ?>
                    <input type="text" class="form-control" placeholder="Personne à joindre" name="parents">
                </div>
                <div class="col mb-5">
                    <?php echo $telError; ?>
                    <input type="text" class="form-control" placeholder="téléphone" name="telephone">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Enregistrer">
</form>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>
</body>
</html>