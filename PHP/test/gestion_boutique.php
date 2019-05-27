<?php
require_once('../include/init.php');
extract($_POST);
extract($_GET);
if(!internauteEstConnecteEtEstAdmin())//si l'internaute n'est ni connect ni admin on  l'envoit sur connexion.php 
{
    header("location:".URL ."connexion.php");
}

//------SUPPRESSION PRODUIT------------
if(isset($_GET['action'])&& $_GET['action']=='suppression')
{
    //-----requet suppression 

    //echo 'suppression produit';
    $supp_data=$bdd->prepare("DELETE FROM produit WHERE id_produit = :id_produit");
    $supp_data->bindValue(":id_produit",$id_produit,PDO::PARAM_INT);
    //id_produit fait reference à $_GET['id_produit'](extract)
    $supp_data->execute();
    $_GET['action']='affichage';//on redirige vers l'affichage des produits
    $validate .= "<div class='alert alert-success col-md-6 offset-md-3 text-center'>Le produit n°<strong>$id_produit</strong>à bien été supprimé!!</div>";
}

//






//-------ENREGISTREMENT------------
if($_POST)
{
    $photo_bdd ='';
if(isset($_GET['action'])&&$_GET['action']=='modification')
{
$photo_bdd =$photo_actuelle;//si on veut garder la photo de modification on affecte la valeur 'hidden'( càd l'URL select ds BDD)

}


    if(!empty($_FILES['photo']['name']))//on verifie que l'indice 'name' ds la superglobale'$_FILES
    //n'est pas vide ,alors on peut uploader
    {
        $nom_photo=$reference .'-'.$_FILES['photo']['name'];
//redefini le nom de la photo en concatenant la ref saisie ds le formulaire         
        //echo $nom_photo.'<br>';
        $photo_bdd = URL ."photo/$nom_photo";
        //on defini URL de la photo quyi est ds la BDD
        //echo $photo_bdd.'<br>';
        $photo_dossier = RACINE_SITE."photo/$nom_photo";
        //chemin physique de la photo,c'est pour copier la photo
        //echo $photo_dossier .'<br>';
        copy($_FILES['photo']['tmp_name'],$photo_dossier);
        //copy est une fonct° predefinie qui permet de copier la photo ds le dossier photo.arguments:copy(nom_temporaire_photo_cheminde destination)
    }

//---REALISER UNE REQUETE d'insertion pour un produit de table produit(sauf le champs id_produit)(requete preparée)
        
if(isset($_GET['action'])&& $_GET['action']=='ajout')
{
    $data_insert = $bdd->prepare("INSERT INTO produit(reference,categorie,titre,description,couleur,taille,public,photo,prix,stock) VALUES (:reference,:categorie,:titre,:description,:couleur,:taille,:public,:photo,:prix,:stock )");

    $_GET['action']='affichage';

    $validate.="<div class='alert alert-success col-md-6 offset-md-3 text-center'>le produit n° <strong>$reference</strong>a bien été modifié!!</div>";
}
//EXO :requete uploader
else                   
{   
    $data_insert = $bdd->prepare("UPDATE produit SET reference = :reference,categorie = :categorie,titre = :titre,description = :description,couleur = :couleur,taille = :taille,public = :public,photo = :photo,prix = :prix,stock = :stock  WHERE id_produit=$id_produit");

    $_GET['action']='affichage';

    $validate.="<div class='alert alert-success col-md-6 offset-md-3 text-center'>le produit reference <strong>$reference</strong>a bien été modifié!!</div>";    
}

        foreach($_POST as $key => $value)
        {
            if($key !='photo_actuelle')//on ejecte le truc hiden de la photo
            {
                 $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);
            }   
                //  $data_insert->bindValue(":pseudo", Yanndev, PDO::PARAM_STR);
                //  $data_insert->bindValue(":nom", Aribot, PDO::PARAM_STR);
                //  ...

        }
        $data_insert->bindvalue(":photo",$photo_bdd,PDO::PARAM_STR);
        $data_insert->execute(); 
}

require_once('../include/header.php');
?>
<!------------LIENS PRODUITS-->
<ul class="col-md-4 offset-md-4 list-group mt-4 text-center ">
  <li class="list-group-item bg-dark text-center text-white"><h5>BACK OFFICE</h5></li>
  <li class="list-group-item bg-dark text-center text-whit"> <a href="?action=affichage"> AFFICHAGE PRODUIT</a></li>
  <li class="list-group-item bg-dark text-center text-whit"><a href="?action=ajout"> Ajout PRODUIT</a></li>
  
</ul>


<!--FIN LIENS




//affichage produit-->
<?php if(isset($_GET['action']) && $_GET['action']=='affichage'):?>


<!-- EXO -->
<!-- //realiser le traitement permettant l'affichage des produits sous form de tableau HTML-->




<h1 class="display-4 text-center">LISTE DES PRODUITS</h1><hr>

<?php $result = $bdd->query("SELECT*FROM produit  ");
     $produits=$result->fetchAll(PDO::FETCH_ASSOC);
     //echo '<pre>';print_r($produits);echo '</pre>';
?>
<table class="table table-border text-center"> <tr>
    <?php foreach($produits[0] as $key =>$value):?>
    <th ><?=strtoupper($key)?>
    </th>
    <?php endforeach;?>
<th>modifier</th>
<th>supprimer</th>
</tr>
    <?php foreach($produits as $key =>$tab):?>
        <tr>
        <?php foreach($tab as $key2 => $value):?>

            <?php if($key2 =='photo'):?>
                <td><img src="<?=$value?>" alt="<?=$tab['titre']?>" class="img-thumbnail"></td>
            <?php else: ?>
                <td><?=$value?></td>
            <?php  endif; ?>

        <?php endforeach;?>
        <td><a href="?action=modification&id_produit=<?= $tab['id_produit']?>" class="text-dark"><i class="fas fa-edit"></i></a></td>
        <td><a href="?action=suppression&id_produit=<?= $tab['id_produit']?>" class="text-danger" onclick="return(confirm('en êtes vous certain ?'))"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
    <?php endforeach;?>
</table>
<?php endif; ?>
<!--FIN D'AFFICHAGE-PRODUITS---->
<?php if(isset($_GET['action']) && ($_GET['action']=='ajout'||$_GET['action']=='modification')): ?>



<h1 class="display-4 text-center"><?=strtoupper($action)?> D UN PRODUIT</h1><hr>
<?php if(isset($_GET['id_produit']))
{
$resultat = $bdd->prepare("SELECT*FROM produit WHERE id_produit=:id_produit");
$resultat->bindvalue(':id_produit',$id_produit,PDO::PARAM_INT);
$resultat->execute();
$produit_actuel=$resultat->fetch(PDO::FETCH_ASSOC);
echo '<pre>';print_r($produit_actuel);echo '</pre>';
}
$reference =(isset($produit_actuel['reference']))? $produit_actuel['reference'] :'';
$categorie =(isset($produit_actuel['categorie']))? $produit_actuel['categorie'] :'';
$titre =(isset($produit_actuel['titre']))? $produit_actuel['titre'] :'';
$description =(isset($produit_actuel['description']))? $produit_actuel['description'] :'';
$couleur=(isset($produit_actuel['couleur']))? $produit_actuel['couleur'] :'';
$taille=(isset($produit_actuel['taille']))? $produit_actuel['taille'] :'';
$photo=(isset($produit_actuel['photo']))? $produit_actuel['photo'] :'';
$public=(isset($produit_actuel['public']))? $produit_actuel['public'] :'';
$prix=(isset($produit_actuel['prix']))? $produit_actuel['prix'] :'';
$stock=(isset($produit_actuel['stock']))? $produit_actuel['stock'] :'';

?>
<h1 class ="display-4 text-center"></h1>

<!--enctype obligatoire en PHP pr uploader un fichier-->
    <form class="col-md-6 offset-md-3 form1" method="post" action="" enctype="multipart/form-data" >
     <div class="form-row">
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Référence</label>
            <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter reference"
            value="<?=$reference ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Catégorie</label>
            <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Enter la catégorie"
            value="<?=$categorie ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" placeholder="Enter le titre"
            value="<?=$titre ?>">
        </div>
        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Entrer la description" value="<?=$description ?>"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Couleur</label>
            <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Indiquer la couleur"
            value="<?=$couleur?>">
        </div>
       <div class="form-group col-md-6">
            <label for="taille">Taille</label>
            <select class="form-control" id="taille" name="taille" >
            <option selected>Choose....</option>
            <option value="xs"<?php if($taille=='xs')echo 'selected';?>>XS</option>
            <option value="s"<?php if($taille=='s')echo 'selected';?>>S</option>>S</option>
            <option value="m"<?php if($taille=='m')echo 'selected';?>>m</option>>M</option>
            <option value="l"<?php if($taille=='l')echo 'selected';?>>l</option>>L</option>
            <option value="xl"<?php if($taille=='xl')echo 'selected';?>>Xl</option>>XL</option>
            </select>
        </div>
        <div class="form-check col-md-12 offset-md-1">
            <input class="form-check-input" type="checkbox"id="public" name="public" value="h"<?php if($public=='h')echo 'selected';?>>H 
            <label class="form-check-label" for="defaultCheck1">
                Homme
            </label>
        </div>
        <div class="form-check col-md-12 offset-md-1">
            <input class="form-check-input" type="checkbox" id="public" name="public" value="f"<?php if($public=='f')echo 'selected';?>>F 
            <label class="form-check-label" for="defaultCheck1">
                Femme
            </label>
        </div>
        <div class="form-check col-md-12 offset-md-1">
            <input class="form-check-input" type="checkbox" id="public" name="public" value="<?php if($public=='mixte')echo 'selected';?>">
            <label class="form-check-label" for="defaultCheck1">
                mixte
            </label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo" >
        </div>
<?php if(!empty($photo)):?>
<em> vous pouvez uploader une nouvelle photo si vous souhaitez la changer</em><br>

<img src="<?=$photo ?>" alt="<?=$titre ?>"class="card-img-top">
<?php endif;?>
<input type="hidden"id="photo_actuelle" name="photo_actuelle" value="<?=$photo ?>">

        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Prix</label>
            <input type="text" class="form-control" id="prix" name="prix" placeholder="Enter un prix"
            value="<?=$prix ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" class="form-control" id="stock" name="stock" placeholder="Nombre de produit"
            value="<?=$stock ?>">
        </div>
        <button type="submit" class="btn btn-dark col-md-4 offset-md-4"><?=strtoupper($action)?></button>
    
</form>

<?php
endif;
require_once('../include/footer.php');