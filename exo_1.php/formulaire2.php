<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>formulaire2</title>
</head>

<body>
<?php

echo'<pre>';print_r($_POST);echo'</pre>';
foreach($_POST as $key => $value)
{
 echo"$key, $value";   
}

?>
<h1 class="col-md-6 mx-3"><strong> PRODUIT </strong></h1><br>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">titre</label>
    <input type="text" class="form-control" id="titre" placeholder="" name="titre">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">taille</label>
    <input type="text" class="form-control" id="taille" placeholder="" name="taille">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">couleur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" " name="couleur">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">poids</label>
    <input type="text" class="form-control" id="poids" placeholder="" name="poids">
  </div> 

  <div class="form-group">
    <label for="exampleInputEmail1">prix</label>
    <input type="text" class="form-control" id="prix"  placeholder="" name="prix">    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" id="description" placeholder="" name="description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">stock</label>
    <input type="text" class="form-control" id="stock" placeholder=""name="stock">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">fournisseur</label>
    <input type="text" class="form-control" id="fournisseur" placeholder="" name="fournisseur">
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>