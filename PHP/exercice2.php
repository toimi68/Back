<!-- creer un compte sur https://fr000webhost.com ou https://infinityfree.net ou l'hebergeur de votre choix 
et uploader vos code sources de l'evaluation sur ce serveur
vs devez rendre l'adresse url de votre site afin que le correcteur puisse évaluer votretravail
en fin d'évaluation penser à uploader l'archive .rar de votre projet ,ne mettez pas index pr que le correcteur ai acces
!-- EXERCICE 1 : 

a- Créer un formulaire d'inscription (methode "POST") avec les champs :
=> Prenom
=> Nom
=> email
=> Adresse
=> cade postal
=> Genre (f/h)

b- Afficher dans un tableau PHP les valeurs saisies dans le formulaire.

c- Effectuer tous les contrôles des champs
-->

<?php
echo '<pre>';
var_dump($_POST);
'</pre>';
$error="";
//b
if($_POST)
{
foreach($_POST as $key =>$value)
{
echo"$key =>$value<br>";
}
echo"<hr>";
}
//c
if(empty($_POST['prenom']))
{
    $error.='<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">il faut remplir le champ prenom!!</div>';

}
if(iconv_strlen($_POST['prenom'])<2 ||iconv_strlen($_POST['prenom']>20))
{

    $error.='<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">le prenom doit contenir entre 2 et 20caracteres !!</div>';
    }

    if(empty($_POST['nom']))
    {
$error.='<div class ="col-md4 offset-md-4 alert alert-danger text-center text-dark">il faut remplir le champs nom!!</div>';
    }
if(iconv_strlen($POST['nom'])<2 || iconv_strlen($_POST['nom'])>20)
{
$error.= '<div class="col-md4 offset-md alert alert-danger text-center text-dark">il faut remplir le champ email!!</div>';
}
if(empty($_POST['email']))
{
    $error.='<div class "col-md4 offset-md alert aler-danger text-center text-dark">il faut remplir le champ email</div>';
}

if(!filter_var($_POST['email'],filter_validate_email))
{
    $error.='<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">adresse non-valide</div>';
}

if(empty($_POST['adresse']))
{
$error.='<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">remplir le champ adresse</div>';
}
if(empty($_POST['code_postal']))
{
    $error.='<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">remplir le code postal</div>';
}

if(empty($_POST['genre']))
{
$error.='<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">remplir le genre</div>';
}
echo $error;
if(empty($error))
{
    echo'<div class="col-md4 offset-md-4 alert alert-danger text-center text-dark">instruction non valide!!</div>';
}

?>



<?php
echo '<pre>';print_r($_POST). echo'</pre>';
echo '<pre style=background:black;color:white;>';var_dump($_POST);
echo '</pre>';
if($_POST){
    if(empty($_POST['prenom']) || iconv_strlen($_POST['prenom'])<5||
    iconv_strlen($_POST['prenom'])
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice2</title>
</head>
<body>
    
</body>
</html>