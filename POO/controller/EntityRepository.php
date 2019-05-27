<?php
namespace Model;
class EntityRepository
{
    private $db;
    public $table;
    public function getDB()//methode permettant d'instancier la class PDO
    {
        if(!$this->db)//si $this db n'est pas rempli
        {
            try
            {
                $xml = simplexml_load_file('../app/config.xml');
                echo '<pre>';print_r($xml);echo'</pre>';
            }
            catch(\PDOException $e)
            {
                die("Probleme de fichier XML manquant!!");
            }

        }
        return $this ->db;//on retourne la connexion
    }
}
$e = new EntityRepository;
$e->getDB();