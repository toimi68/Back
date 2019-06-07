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
                $this->table =$xml->table;//on associe la table du fichier xml à la propriete $table de la class
                //echo '<pre>';print_r($xml);echo'</pre>';
try
{
    $this->db = new \PDO("mysql:dbname=" .$xml->db .";host=" .$xml->host,$xml->user,$xml->password,array(/PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION));//connexion à la BDD si on change la BDD ns n'aurons pas besoin de modifier ce code
}

            }
            catch(\PDOException $e)
            {
                die("Probleme de connexion!!");
            }

        }
        catch(\PDOException $e)
        {
            die("probleme de fichier xml")
        }

        return $this ->db;//on retourne la connexion
    }
}
$e = new EntityRepository;
$e->getDB();




public function getField()//permet de recuperer les champs
{
    $q = $this->getDb()->query("DESC".$this->table);//DESC description de la table
$r=$q->fetchAll(\PDO::FETCH_ASSOC);
return array_splice($r,1)//permet de retirer le champs 1er employe ds le formulaire par la methode array-splice
}
public function select($id)//permet de selectioner les donnees d'un employé ds la BDD via son id
{
    $q=$this->getDB()->querry("SELECT*FROM" .this->table .'WHERE id' .ucfirst($this->table).',',implode(',',array_key($_POST)).')VALUES' (
}





$q =$this->getDb()->query('REPLACE INTO' .$this->table .'(id' .ucfirst($this->table) .',' .implode(',',array_key($_POST)).')VALUES (' .$id . '.'.",".')');
}
public function delete($id)
{
    $q = $this->getDb()->query("DELETE FROM".$this->table ."WHERE id" .ucfirst($this->table).'='.(int)$id);
}
}
$e = new EntityRepository;
$e = getDb();