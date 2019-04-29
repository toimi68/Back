<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <title>formulaire-1</title>
</head>
<?php
echo '<pre>';print_r($_POST);echo'</pre>'
?>

<body>

<form class="col-md-6 mx-auto"method ="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">
      <div class="alert alert-success" role="alert">
      </label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Prenom <div class="alert alert-success" role="alert"></label>
      <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address<div class="alert alert-success" role="alert"></label>
    <input type="text" class="form-control" id="address" placeholder="" name="adresse">
  </div>
  <div class="form-group">
    <label for="inputAddress2">ville<div class="alert alert-success" role="alert"></label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="ville">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">genre<div class="alert alert-success" role="alert"></label>
      <input type="text" class="form-control" id="genre" name="genre" placeholder="">
    </div> 
    
  </div>
  
  </div>
  <button type="submit" class="btn btn-success">Valider</button>
</form><br>
<textarea name="commentaire" id="commentaire" cols="30" rows="5"></textarea>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>

</html>
