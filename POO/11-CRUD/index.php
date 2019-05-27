<?php
require_once('autoload.php');
$controller = new Controller\Controller;
//l'autoload voit passer le mot cle'new'et fait appel au fichier Controller 
// echo '<pre>';var_dump($controller);echo'</pre>';
$controller->handlerRequest();//on fait appel a la methode handlerRequest()
//se trouvant dans le fichier controller.php
    