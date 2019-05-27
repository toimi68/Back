<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); //retourne le bon encodage?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();//permet de charger des fichiers indispensables à wordpress(js,css,etc...)
   // et permet de recuperer le sidebar noire?>
</head>
<body <?php body_class();//appel à des class de wordpress?>>
<div class="container-fluid px-0">
    <div class="d-flex">
        <div class="col-md-4 bg-info  hauteur">
    <?php dynamic_sidebar('haut-gauche')?>
        </div>
        <div class="col-md-4 bg-success
         hauteur ">
        <?php dynamic_sidebar('haut-centre')?>
        </div>
        <div class="col-md-4  bg-info hauteur">
          
       <?php dynamic_sidebar('haut-droit')?> 
        </div>
    </div>


<!--navbar---bootstrap----->
<nav class="navbar navbar-expand-lg navbar-light bg-success ">
<!--cettefonction wordpress permet d'importer le menu principal que l'on a creer ds le fichier php container class=>'menu header'
theme_location =>'primary' permet de preciser que c'est le menu principal-->
  <div class="container">

        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
<?php wp_nav_menu(array('container_class'=>'menu_header','theme_location'=>'primary'))?>        
      </ul>      
      </form>
    </div>
  </div>
</nav>
    <div class="col-md-12 px-0 bg-danger h-entetes text-center">
    <?php dynamic_sidebar('entetes')?>
    </div>
</div>
  
<section class="ma-section">


</body>
</html>