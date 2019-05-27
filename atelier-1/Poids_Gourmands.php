<?php


$formule='';
$photo='';
$prix='';

if(!empty($_GET))
{
  $formule=$_GET['menu'];
   $photo=$_GET[|'img'] ;
   $prix=$_GET['prix'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/poid_gourmand.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Srisakdi">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
<main>
    <div class="container">
<header>
<h1> <i class="fas fa-kiwi-bird">au pois gourmand  </i> </h1>
</header>

        <section>
            <div class="row">
                <div class="col">
                    <h3>formule Dehli</h3>
                <div class="card" style="width: 28rem;">                
                    <img class="card-img-top" src="img/delhi.jpg" alt="choix dehli">
                    <div class="card-body">
                        
                        <p class="card-text"> - Poppadoms</p>
                        <p class="card-text"> - Agneau byriani</p>
                        <p class="card-text"> - Lassi mangue</p>                   

                    </div>
                 <button type="button" class="btn btn-primary">choisir</button>   
</div>             
                </div>
                <div class="col">
                    <h3>formule Rome</h3>
                <div class="card" style="width: 28rem;">
  <img class="card-img-top" src="img/rome.jpg" alt="Choix rome">
  <div class="card-body">
    
        <p class="card-text">  - Tomates buratina</p>
          <p class="card-text">- Rizotto aux asperges</p>
          <p class="card-text">- Panna cotta</p>
  </div>
  <button type="button" class="btn btn-success">choisir</button>
</div>                
                </div>
            </div>
        </section>
    
        <section>
            <div class="row">
                <div class="col">
                    <h3>formule New-York</h3>
               <div class="card" style="width: 28rem;">
  <img class="card-img-top" src="img/nyork.jpg" alt="Choix n-y">
  <div class="card-body">
    
         <p class="card-text"> - César salade</p>
        <p class="card-text">  - Cheese burger</p>
         <p class="card-text"> - Cheesecake</p>
  </div>
  <button type="button" class="btn btn-danger">choix</button>
</div>          
                        
                </div>
                <div class="col">
<h3>formule Hanoï</h3>
              <div class="card" style="width: 28rem;">
  <img class="card-img-top" src="img/hanoi.jpg" alt="Choix hanoï">
  <div class="card-body">
    
          <p class="card-text">- Nems aux crevettes</p>
         <p class="card-text"> - Poulet saté</p>
          <p class="card-text">- Perles de coco</p>
  </div>
  <button type="button" class="btn btn-info">choisir</button>
</div>  
                
                </div>
            </div>
        </section>    
    <footer><i class="fas fa-kiwi-bird">.......</i>
    <i class="fas fa-kiwi-bird">.......</i>
    <i class="fas fa-kiwi-bird">......</i>
    <i class="fas fa-kiwi-bird">.....</i>
    <i class="fas fa-kiwi-bird"></i><h2>au pois gourmant</h2>
        
    </footer>
    </div>
</main>
<div class="new-york">
<header>
 <i class="fas fa-kiwi-bird"></i><h2>au pois gourmant</h2>   
</header>

<section class="new_york">
    <h2>- Merci pour votre commande !</h2>
<img src="/img/resultat_2.png" alt="">
 <ul>Votre formule ... arrive dans quelques instants...
     <li>- Nous vous souhaitons une bonne dégustation.</li>
    <li> - Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.</li>
     <li>- Votre facture sera de ... €</li>
    </ul>
</section>
</div>
<!--là je place ma condition-->

<div class="rome">
</div>
<div class="dehli"> </div>
<div class="hanoï"></div>
</body>
</html>
?>