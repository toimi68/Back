<?php require_once 'init.inc.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
     crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
     crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test_creation_de_site</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">bienvenue dans la boutique</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto">
<?php if(internauteEstConnecte()):?>
      <a class="nav-item nav-link active" href="<?= URL ?>  boutique.php">Boutique <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= URL?>profil.php">profil</a>
      <a class="nav-item nav-link" href="<?= URL ?>panier.php">panier</a>
<?php else:?>  
            <a class="nav-item nav-link" href="<?= URL ?>deconexion.php? action=deconnexion">deconnexion</a>
      <a class="nav-item nav-link" href="<?= URL ?>inscription.php">inscription</a>
      <a class="nav-item nav-link" href="<?= URL ?>connexion.php">">connexion</a>
<?php endif;?>
<?php if(internauteEstConnecteEstAdmin()) :?>  
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">annuler</a>
<?php endif;?>
    </div>
  </div>
</nav>  
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
 integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
 integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>