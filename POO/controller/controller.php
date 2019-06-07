<?php
//ce fichier contient ttes les actions et les methode a executer.Par exemple
//si je souhaite afficher des informatioàns 10 par 10 ,c'est dans ce fichier 
//qu'on fera le traitement
namespace Controller;

class Controller
{
    private $db;
    public function __construct()
    {
echo "<hr>Appel du bon fichier EntityRepository"
$this->db= new [BDD];
    }
    
}
public function save($op)
{
    $title = $op; //permet de recuperer les donnes envoyes ds l'URL alors on le stock ds la variable $id
    $id = isset($_GET['id']) ? $_GET['id'] : NULL; //permezt de controler si un id a ete envoye ds l'URL
    $values =() 
}
if ($_POST)
{

    $r = $this->save();//qd on valide le formulaire d'ajout  c'est methode save du fichier EntityRepository
}
$this->render ('layout.php','donnees-form.php',array(("title")))