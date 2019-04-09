<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>formulaire2</title>
</head>
<body>
    <!-- 
        1.Réaliser un formulaire html avec les champs suivants : pseudo, mdp, confirmer mdp, nom, prenom, email, sexe, telephone, adresse, ville, code_postal et un bouton submit
        2.Controler en PHP que l'on receptionne bien toutes les données du formulaire
        3. Faites en sorte d'informer l'internaute si le pseudo n'est pas compris entre 2 et 20 caractères
        4. Faites en sorte d'informer l'internaute si les mots de passes ne sont pas identiques
        5. Faites en sorte d'informer l'internaute si l'email n'est pas au bon format (indice : fonction prédéfinie filter_var)

        6. Faites en sorte d'informer l'internaute si le code postal n'est pas de type numérique (is_numéric) et si il est différent de 5 caractères-->
<?php


//si le champs'nom' est vide,alors on entre ds la condit° "if"

 //    8.faites en sorte d alerter l internaute si le champs teloephone n est pas valide(indice:expression reguliere->fonction predefinie preg_match())



if(!preg_match('#^[0-9]{10}+$#', $_POST['telephone']))
{
    echo'<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">telephone non valide,caractere non autorisés!!</div>';
}
//preg_match():une expression reguliere (regex) est tjrs entourés de dieze afin de preciser les options
//^indique le debut de la chaine
//$ indique la fin de la chaine
//+ est pour dire que les caracteres peuvent être utilisés plusieurs fois 


//Exo 9 fait en  sorte d'informer l'internaute s'il a bien rempli le formulaire
$error='';//on céer un variable error et on remplace ts les echo par $error.=
echo $error;

//Alors on stocke ts les messages d'erreurs ds $error c'est elle est vide alors ns ne sommes ds aucunes conditions 'if' les champs controle sont bon =>on affiche un message de validation







    
    //.2
    echo '<pre>'; print_r($_POST); echo '</pre>';
    if($_POST)
    {
        foreach($_POST as $key => $value )
        {
        echo"$key => $value<br>";
        }
        echo'<hr>';
    
        //.3
        if(iconv_strlen($_POST['pseudo']) < 2 || iconv_strlen($_POST['pseudo']) > 20 ) 
        {
            echo '<div class = "col-md4 offset-md-4 alert alert-danger text-center text-dark">Le pseudo doit contenir entre 2 et 20 caractère !! </div>';
        }
        //.4
        if($_POST['mdp'] !== $_POST['mdp_confirm'])
        {
            echo '<div class = "col-md4 offset-md-4 alert alert-danger text-center text-dark">Les mots de passes doivent être identiques !! </div>';
        }
            
        //.5
        //si le champs 'email' n'est pas (!) au bon format alord on rentre dans les accolades du IF
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        {
            echo '<div class = "col-md4 offset-md-4 alert alert-danger text-center text-dark">Adresse non valide !! </div>';
        } 
        //.6
        if (is_numeric($_POST['code_postal'])) 
        {
            echo var_export(['code_postal'], true) . " est numérique";
        } else {
            echo var_export(['code_postal'], false) . " N'est PAS numérique";
        }
        
        //.7
        if (empty($_POST['adresse'])) 
        {
            echo '<div class = "col-md4 offset-md-4 alert alert-danger text-center text-dark">Il faut remplir le champ adresse !! </div>';
        }
        if(iconv_strlen($_POST['cp'])!== 5 || !is_numeric($_POST['cp']))

{
    echo'<div class="col-md4 offset-md4 alert alert-danger text-center text-dark">code postal non valide!!
    </div>';
}

  //      7. Faites en sorte d'informer l'internaute si le champs nom est laissé vide

if(empty($_POST['nom']))
{
    echo'<div class="col-md-4 offset-md-4 alert alert-danger text-center text-dark">faut remplir le champs adresse!!
    </div>';
}
if(empty($error))
{
    echo'<div class="col-md-4 offset-md-4 alert alert-success text-center text-dark">Inscription validée!!</div>';
}
}
    ?>
    <form class="col-md-4 offset-md-4" method="post" action=""> 
        <div class="form-group">
            <label for="exampleInputEmail1">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Enter pseudo">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="mdp_confirm" name="mdp_confirm" placeholder="confirm Password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sexe</label>
            <input type="text" class="form-control" id="sexe" name="sexe" placeholder="Enter gender">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Enter location">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Enter town">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Code Postal</label>
            <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Enter code postal">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</body>
</html>