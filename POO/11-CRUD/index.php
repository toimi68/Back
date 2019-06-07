<?php
require_once('autoload.php');
$controller = new Controller\Controller;
//l'autoload voit passer le mot cle'new'et fait appel au fichier Controller 
// echo '<pre>';var_dump($controller);echo'</pre>';
$controller->handlerRequest();//on fait appel a la methode handlerRequest()qui est une permet de definir l'action de l'utilisateur
//par exemple si l'utilisateur ajoute un employé c'est la methode save()qui s'execute.
//se trouvant dans le fichier controller.php
    