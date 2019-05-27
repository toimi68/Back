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