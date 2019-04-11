<?php
require_once("include/init.php");
require_once("include/header.php");
extract($_POST);
//EXO2:
//echo '<pre>';print_r($_POST),'</pre>';
//EXO3
if($_POST)
{
    $verif_pseudo=$bdd->prepare("SELECT*FROM membre WHERE pseudo=:pseudo");
    $verif_pseudo->bindValue(':pseudo',$pseudo,PDO::PARAM_STR);
    $verif_pseudo->execute();
    if($verif_pseudo->rowCount()>0)
    {
        $error.='<div class="col-md-6 offset-md-3 text-center alert alert-danger">le pseudo <strong>'.$pseudo.'</strong> est déjà existant en BDD merci de renouveler</div>';
    }
    //si le resultat de la requete

    //EXO 4
    if($mdp !== $mdp_confirm)
    {
        $error.='<div class="col-md-6 offset-md-3 text-center alert alert-danger">merci de verifier le mot de passe!!</div>';
    }
    if(!$error)
    {
        $data_insert=$bdd->prepare("INSERT INTO membre(pseudo,mdp,nom,prenom,email,civilite,ville,code postal,adresse)VALUES(:pseudo,:mdp,:nom,:prenom,:email,:civilite,:ville,:code postal,:adresse)");
        foreach($_POST as $key => $value)
        {
            if($key !='mdp_confirm')
            {
                $data_insert->bindValue(":$key",$value,PDO::PARAM_STR);
            }    
        } 
        $data_insert -> execute();   
    }
    $data_insert->execute();
    header("location:connexion.php?action=validate");//header()->fonct° predefinie qui permet d'effectuer une redirect° de page URL
}  


//$data_insert->bindvalue(":pseudo",'toimStagi',PDO::PARAM_STR);
//$data_insert->bindvalue(":nom",'TOIM',PDO::PARAM_STR);

    

//si l'internaute a bien rempli le formulaire ,ds if la $error est vide ,il faut executer le traitement d'insertion(requete preparee) 
?>

<!--1. Créer un formulaire HTML correspondant à la table membre de la BDD 'site' (sauf id_membre et statut), ajouter le champs 'confirmer mot de passe'
2. Contrôler en PHP que l'on receptionne bien toute les données du formulaire ($_POST)
3. Contrôler la disponibilité du pseudo
4. Faites en sorte d'informer l'internaute si les mdp ne sont pas identiques
-->
<!--
    Créer un formulaire HTML correspondant à la table membre de la BDD 'site' (sauf id_membre et statut), ajouter le champs 'confirmer mot de passe'
2. Contrôler en PHP que l'on receptionne bien toute les données du formulaire ($_POST)
3. Contrôler la disponibilité du pseudo
4. Faites en sorte d'informer l'internaute si les mdp ne sont pas identiques
    --> 
<!--1.-->
<h1 class="display-4 text-center">INSCRIPTION</h1><hr>
<?= $error ?>
<form class="col-md-4 offset-md-4" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPseudo">Pseudo</label>
      <input type="text" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
    </div><!-- Pseudo -->
  
  <div class="form-group col-md-6">
      <label for="passW">Password</label>
      <input type="password" class="form-control" id="mdp" placeholder="Password" name="mdp">
    </div>
    <div class="form-group col-md-6">
      <label for="pw"> Confirm Password</label>
      <input type="password" class="form-control" id="mdp_confirm" placeholder="Enter your Password again" name="mdp_confirm">
    </div> <!-- Password -->
 
    <div class="form-group col-md-6">
      <label for="inputNom">Nom</label>
      <input type="text" class="form-control" id="om" name="nom" placeholder="Nom">
    </div><!-- Nom -->
    
 
    <div class="form-group col-md-6">
      <label for="inputPrénom">Prénom</label>
      <input type="text" class="form-control" name="prenom" placeholder="Prénom">
    </div><!-- Prénom -->
      <div class="form-group col-md-12">
    <label for="exampleInputEmail1">Email </label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">reviens c'était pour rire!!!</small>
  </div><!-- Email -->
<div class="form-group col-md-12">
    <label for="sexe" class="text text-info">Genre</label>
  <select name="civilite" class="custom-select"  aria-label="Example select with button addon">
        <!-- <option selected>Choose sexe </option> -->
        <option value="f">Femme</option>
        <option value="m">Homme</option>
  </select><!-- Genre -->
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress" class="text text-info">Address</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="n° de rue, voie, boulvard...">
  </div> <!-- Address -->
  
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputVille">City</label>
      <input type="text" class="form-control" name="ville" action="">
    </div><!-- Ville -->
    <div class="form-group col-md-4">
      <label for="inputCp">Code Postal</label>
      <input type="text" class="form-control" name="code_postal" placeholder="Ex: 94600" action="">
    </div><!-- Code postale -->
  </div>
  
 <button class="col-md-12 btn btn-primary" type="Valider" name='valider'>valider</button>










<?php
require_once('include/footer.php');
?>
