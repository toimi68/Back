<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>immobilier</title>
</head>
<body>
<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">titre</label>
      <input type="text" class="form-control" id="titre" placeholder="titre" value="" required name="titre">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">surface</label>
      <input type="text" class="form-control" id="surface" placeholder="surface" value="" required name="surface">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername"></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"></span>
        </div>
        <input type="text" class="form-control" id="prix" placeholder="prix" aria-describedby="inputGroupPrepend2" required name="prix">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">adresse</label>
      <input type="text" class="form-control" id="adresse" placeholder="adresse" required name="adresse">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04"></label>
      <input type="text" class="form-control" id="ville" placeholder="ville" required name="ville">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04"></label>
      <input type="text" class="form-control" id="code_postal" placeholder="code_postal" required name="">code_postal
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">photo</label>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="picture/maison2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="picture/maison3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="picture/maison4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <input type="image" class="form-control" id="photo" 
      placeholder="photo" required name="photo"><a href="picture/maison1.jpg" ></a>
      
      
    </div>
    <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1">location</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">vente</label>
</div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required >
      <label class="form-check-label" for="invalidCheck2">
        Accepte les termes et les conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enregistrer</button>
</form>
<!--On se connecte--->
<?php
//--on dispose les condition des  critéres du code postal
$bdd =new PDO ('mysql:host=localhost;dbname=immobilier','root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
?>

<?php
extract($_POST);
if(is_numeric($_POST['code_postal']))
{
    echo var_export(['code_postal'],true)."est numeric";
}
else{
    echo var_export(['code_postal'],false)."n'est pas numerique";
}

?>
<!--creation de la page d'affichage-->
<?php

if(isset($_GET['action'])&& $_GET['action']=='ajout')
{
    $data_insert = $bdd->prepare("INSERT INTO logement(titre,adresse,ville,code_postal,surface,prix,photo,type,description) VALUES (:titre,:adresse,:ville,:code_postal,:surface,:prix,:photo,:type,:description, )");

    $_GET['action']='affichage';
  


    $validate.="<div class='alert alert-success col-md-6 offset-md-3 text-center'>le logement n° 38 <strong>$reference</strong>a bien été enregistré!!</div>";
}
else                   
{   
    $data_insert = $bdd->prepare("UPDATE logement SET titre = :titre,adresse = :adresse,ville = :ville,code_postal = :code_postal,surface = :surface,prix = :prix,photo = :photo,type = :type,description = :description WHERE id_logement=$id_logement");

    $_GET['action']='affichage';

    $validate.="<div class='alert alert-success col-md-6 offset-md-3 text-center'>le logement ajouté <strong>$reference</strong>a bien été enregistré!!</div>";    
}
?>
<!--uploader de la photo-->
<?php
extract($_GET);
        foreach($_POST as $key => $value)
        {
        if($key ='logement_38.jpg')

        //on ejecte le truc hiden de la photo
            {
                 $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
            } 
            }
        $data_insert->bindvalue(":picture",$photo_bdd,PDO::PARAM_STR);
        $data_insert->execute();
  $bdd = new PDO ('mysql:host=localhost;dbname=immobilier','root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
      
        
$bdd=>prepare (INSERT INTO logement(titre,adresse,ville,code_postal,surface,prix,photo,type,description) VALUES(maison,7rue_du_maire,Paris,75001,250,100000,vente,maison3.jpg,ancienne);
(maison,108mondor,Creteil,94000,150,25000,vente,recent)
(appartement,22ruelescure,Vitry,94400,110,2000,location),


?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>