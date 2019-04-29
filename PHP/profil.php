<?php
require_once('include/init.php');
if(!internauteEstConnecte())//si l'internaute n'est pas connecté ,il n'a rien à faire sur la page profil,on le renvoit vers connexion
{
    header("location:connexion.php");
    }
require_once('include/header.php');
//echo '<pre>';print_r($_SESSION);echo'</pre>'
?>
<!--afficher le pseudo en passant par le fichier session-->
<h1 class="display-4 text-center">BONJOUR<strong class="text-info">
<?=$_SESSION['membre']['pseudo']?></strong></h1><hr>
<!--realiser une page profil avec tt les données sauf id_membre et statut-->
<table class="col-md-6 mx-auto table table-dark">

<?php
foreach($_SESSION['membre']as $key =>$value):?>
<tr>
<?php
//les ':' et endif ou endforeach remplacent les accolades

if($key  != 'id_membre'&& $key !='statut'):?>

<th><?=$key?></th><td><?=$value ?></td>
<?php endif;?>
</tr>
<?php endforeach;?>
</table><hr>
<?php
//si le statut est 1 c'est  l'admin du site
if($_SESSION['membre']['statut']==1)
$statut = 'ADMIN';
else $statut = 'MEMBRE';//là statut 0 membre classique
?>





<h3>VOUS êtes <strong class="text-info"></strong><?= $statut?></strong> du site<hr></h3>
<?php 
require_once('include/footer.php');
