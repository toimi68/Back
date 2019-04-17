<?php 
require_once("include/init.php");
require_once("include/header.php");

/*realiser la requete qui select° le produit par rapport à l'id_produit envoyé ds l URL
-ajouter une methode pour rendre le resultat exploitable
-créer une fiche produit avec les informations du produit:photo,prix, public, categorie, 
titre, description, couleur, taille, selecteur de quantite et un bouton d'ajout au panier*/?>
<?php
if(isset($_GET['id_produit']))://si l'indice id_produit est defini ds l'URL
    $resultat = $bdd->prepare("SELECT*FROM produit WHERE id_produit=:id_produit");
    $resultat->bindValue(':id_produit',$_GET['id_produit'],PDO::PARAM_INT);
    $resultat->execute();
    $produit=$resultat->fetch(PDO::FETCH_ASSOC);

echo'<pre>';print_r($produits);echo'</pre>';

?>
<h1 class="display-4 text-center mt-4"></h1>
<div class="col-lg-6 col-md-12 mx-auto">
            <div class="card h-100">
              <a href="fiche_produit.php?id_produit<?=$produits['id_produit']?>"><img class="card-img-top" src="<?= $produits['photo']?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="fiche_produit.php?id_produit<?=$produits['id_produit']?>"VENEZ VOIR src=<?$produits['prix']?>alt=""></a>
                </h4>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['titre']?>"></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['categorie']?>"></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['taille']?>"></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['stock']?>"></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['couleur']?>"></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['description des quantité']?>"></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['public']?>"></p></h5>
              </div>
              <div class="card-footer">
                
              </div>
            </div>
          </div>

          <?php

else://si l'indice n'est pas definit ds lm'URL ,on redirige vers la boutique
    header("location:boutique.php");
        endif;
    require_once("include/footer.php");