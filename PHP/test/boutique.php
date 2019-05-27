<?php
require_once("include/init.php");
require_once("include/header.php");
extract($_GET);
?>
<div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">La Boutique "bien  accueilli"</h1>
        <div class="list-group">



<?php
//requete de select° des categories distinctes de BDD

$resultat =$bdd->query("SELECT DISTINCT categorie FROM produit");
//echo '<pre>';print_r($resultat);echo '</pre>';

//bOUCLER SUR CHAQUE CATEGORIE et créer un lien
    while($categorie =$resultat->fetch(PDO::FETCH_ASSOC)):
    //echo'<pre>';print_r($categorie);echo'</pre>';
    ?>
          <a href="?categorie=<?=$categorie['categorie'] ?>" class="list-group-item alert-link text-dark text-center"><?=$categorie['categorie'] ?></a>
    
    <?php endwhile;?>
          



        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= URL ?>photo/chemise.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= URL ?>photo/froc.femm.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= URL ?>photo/veste-femm.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
<?php
if(isset($_GET['categorie'])):
    $resultat = $bdd->prepare("SELECT*FROM produit WHERE categorie=:categorie");
    $resultat->bindValue(':categorie',$_GET['categorie'],PDO::PARAM_STR);
    $resultat->execute();
else:$resultat=$bdd->prepare("SELECT *FROM produit");
$resultat=>execute();

endif;



    while($produits=$resultat->fetch(PDO::FETCH_ASSOC)):
        echo '<pre>';print_r($produits);echo'</pre>';
?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="fiche_produit.php?id_produit<?=$produits['id_produit']?>"><img class="card-img-top" src="<?= $produits['photo']?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="fiche_produit.php?id_produit<?=$produits['id_produit']?>VENEZ VOIR src=<?$produits['prix']?> alt="></a>
                </h4>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['titre']?>src=<?$produits['titre']?>alt="></p></h5>
                <h5 class="text-center">
                <p class="card-text"><a href="fiche_produit.php?id_produit<?=$produits['categorie']?>src=<?$produits['categorie']?>alt="></p></h5>
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
  endwhile;
  ?>

        <?php 
      else: 
      ?> 
        
    <?php 
  endif; 
  ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>








<?php
require_once("include/footer.php");

