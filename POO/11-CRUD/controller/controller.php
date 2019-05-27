<?php
//ce fichier contient toutes les actions et les mpethodes a executer exemple afficher des infos 10 par 10 c'est là que ça se passe 

namespace Controller;

class Controller
{
    public $db;
    public function __construct()
    {
        $this->db = new \Model\EntityRepository;
        //permet de recuperer une connexion à la BDD qui se trouve dans le fichier 
        //EntityRepository.php
    }
    public function handlerRequest()
    {
        $op = isset ($_GET['op']) ? $_GET['op']:NULL;//si 'op' est defini ds l'URL on le stock dans une variable
        //sinon on stock NULL

        try 
        {
            if($op=='add'|| $op == 'update') $this->save($op);//si on ajoute ou modifie c'est save
            elseif($op=='select') $this->select();//si on ajoute un employe on fait select
            elseif($op=='delete') $this->delect();//si on supprimpe un employe on utilise delete
            else $this -> selectAll();//permet d'afficher l'ensemble des employes
        }
        catch(Exception $e)
        {
            die("probleme dans l'action de l'internaute!!");
        }
    }
    public function selectAll()
    {
        // echo 'Methode selectAll !!';
        // $r = $this->db->selectAll();
        // //db -->represente un objet issu de la classeEntityRepository
        // echo '<pre>';print_r($r);echo'</pre>';
$this->render('layout.php','donnees.php',array('title'=>'toutes les donnees','donnees'=>$this->db->selectAll(),'fields'=>$this->db->getFields(),'id' =>'id'.ucfirst($this->db->table)//affiche idEmploye cela servira à pointersur l'indice idEmployé du tableau de donnees envoyé dans le layout pour les liens voir /supprimer/modifier
//on pointe sur la methode EntityRepository.php
));

    }

    public function save($op)
    {$title =$op;//permet de recupere les donnees envoyé ds lURL et de la stocker ds le $title
        if($_POST)
        {
           $r =$this->db->save();//qd on valide le formulaire d'ajout ,on execute la metyhode save()du fichier EntityRepository.php
        }
        $this->render('layout.php','donnees-form.php',array("title" =>"Donnee : $title","op"=>$op,"fields"=>$this->db->getfields() ));
    }
    public  function  render($layout, $template, $parameters = array())
    {
        extract($parameters);//permet d'avoir les indices du tableau comme variable
        ob_start();//commence la temporisation

        require "view/$template";
        $content =ob_get_clean();//tout ce qui se trouve ds le template sera stocké ds $contentgrace à la fonction ob_get_clean()
        ob_start();//temporise la sortie de l'affichage
        require "view/$layout";
        return ob_end_flush(); //permet de liberer l'affichage et fait tout apparaitre sur la page
    }
}
