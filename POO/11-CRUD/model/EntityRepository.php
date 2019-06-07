<?php 
namespace Model;

class EntityRepository
{
    private $db;
    public $table;
    public function getDb()
    {
        if(!$this->db)
        {
            try
            {
                $xml = simplexml_load_file('app/config.xml');
                // echo '<pre>'; print_r($xml); echo'</pre>';
                $this->table= $xml->table;//on associe de la table du fichier XML à la 
                //propriete '$table' de la classe, cette propriete nous servira pour toutes nos requetes 
                //SQL(INSERT INTO $this->table)

                try
                {
                    $this->db = new \PDO("mysql:dbname=" . $xml->db . ";host=".$xml ->host,$xml->user, $xml->password, array(\PDO::ATTR_ERRMODE
                    =>\PDO::ERRMODE_EXCEPTION));
                }
                catch(\PDOException $e)//on entre dans le catch ,en cas de mauvaise connexion
                {
                    die("Problème de connexion !!"); 
                }
            }
            catch(\PDOException $e)
            {
                die("Fichier XML manquant !!");     
            }
            
        }
        return $this->db;//on retourne la connexion
    }
    
    public function selectAll()
    {
        $q = $this->getDb()->query("SELECT * FROM ". $this->table);
        $r = $q ->fetchAll(\PDO::FETCH_ASSOC);
        return $r;
    }
    public function getFields()//methode permettant de recupere le nom des champs/colonne des table 'employes'
    //DESC:description de la table
    {
        $q = $this->getDb()->query("DESC ".$this->table);//DESC :description de la table
        $r=$q->fetchAll(\PDO::FETCH_ASSOC);
        return array_splice($r,1);//permet de retirer le 1er champ idemploye ds le formulaire ds mon ...
    } 

    public function select($id)
    //$q = $this->getDb()->query("SELECT*FROM employe WHERE idEmploye = 7256);
    $q =$this ->getDb()->query("SELECT*FROM " .$this->table .'WHERE id' .ucfirst ($this->table) . "=" .(int)$id);
$r = $q->fetch(\PDO::FETCH_ASSOC).
return $r;
}

    public function save()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';

        // $q = $this->getDb()->query('REPLACE INTO employe (idEmploye, prenom, nom, sexe, service, dateEmbauche, salaire)VALUES ('  $id . ', '$_POST[prenom]', '$_POST[nom]' etc...)');  


        $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id' . ucfirst($this->table) . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ','. "'" . implode("','", $_POST) . "'" . ')');
        // $this->table : retourne la table 'employe'
        //id . ucfirst($this->table) : idEmploye
        // implode(',', array_keys($_POST)) : permet d'extraire chaque indice du formulaire afin de les appelés comme nom de champs/colonne dans la requete

    }
    
//public function save()



    //$id = isset($_GET['id']) ? $_GET['id'] :'NULL';
    //$q = $this->getDb()->query('REPLACE INTO' . $this->table .'(id'. ucfirst($this->table) .','.implode(','array_key($_POST)) .')VALUES('.$id.','."." .implode("','",$_POST) ."'".')');
//$this ->table : retourne la table 'employe'
//id.ucfirst($this->table):idEmployé
//implode(',',array_keys)
//}
}

$e = new EntityRepository;
$e->getDB();
