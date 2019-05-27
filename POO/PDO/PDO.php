<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<?php
//EXO REALISER LE TRAITEMENT php afin de se connecter à la BDD 'entreprise' 
$pdo =new PDO('mysql:host=localhost;dbname=entreprise','root','',array(PDO::ATTR_ERRMODE =>
PDO::ERRMODE_WARNING));
echo '<pre>';print_r($pdo);echo'</pre>';
echo '<pre>';print_r(get_class_methods($pdo));echo'</pre>';
echo"<h2 class='display-4 text-center'>exemple n°1 SELECT+QUERY+FETCH</h2><hr>";
$resultat =$pdo->query("ezzlkki");//en cas d'erreur SQL on a les messages et codes
echo'<pre>';print_r($pdo->errorInfo());echo'</pre>';
//--------------EXO-------------
//afficher les données de l'employé id 415
$resultat=$pdo->query("SELECT*FROM employes WHERE id_employes=415");
$employes = $resultat->fetch(PDO::FETCH_ASSOC);
echo'<pre>';print_r($employes);echo'</pre>';
echo '<div class="alert alert success col-md-4 offset-md-4 text-center text-dark">';
foreach($employes as $key => $value)
{
    echo "$key-$value<hr>";
}
echo'</div>';
echo"<h2 class='display-4 text-center'>exemple n°2 SELECT +QUERY+FETCHALL</h2><hr>";
//--------------EXO--------------
//affiche successivement les donnees de chaque employes en utilisant la methode FETCHALL()

$resultat=$pdo->query("SELECT*FROM employes" );
$employes = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo'<pre>';print_r($employes);echo'</pre>';

echo '<div class="alert alert success col-md-4 offset-md-4 text-center text-dark">';
foreach($employes as $key =>$tab)
{
    foreach($tab as $key2 =>$value)
    {
        echo "$key2-$value<hr>";
    }
    echo'<div >';
}
echo"<h2 class='display-4 text-center'>exemple n°3 SELECT +QUERY+FETCH_ASSOC</h2><hr>";
$resultat = $pdo->query("SELECT*FROM employes",PDO::FETCH_ASSOC);
//on demande d'indexer avec le nom des champs qd c'est au stade objet
echo '<pre>';var_dump($resultat);echo'</pre>';
//--------------EXO----------------------
//afficher l'ensemble des employes sous forme HTML via l'objet '$resultat'
echo '<table class="table table-dark text-center"><tr>';
    for($i = 0; $i < $resultat->columnCount(); $i++)
        {
            $colonne = $resultat->getColumnMeta($i);
            echo "<th>$colonne[name]</th>"; 
        }
    echo '</tr>';
    foreach($resultat as $key => $tab)
    {
        echo '<tr>';
        foreach($tab as $key1 => $value)
        {
            echo "<td>$value </td>";
        }
        echo '</tr>';
    }

echo '</table>';
echo"<h2 class='display-4 text-center'>exemple n°4 INSERT+UPDATE+DELETE</h2><hr>";
//-------------------EXO-------------------
//insereZ vous ds la BDD à l'aide d'une requéte INSERT
$resultat = $pdo-> exec("INSERT INTO employes VALUES (DEFAULT,'touhami','Zarouel','m','info','2019-02-12',75000)");
echo "nombre de resultat affectes par l'INSERT :<strong>$resultat</strong><hr>";

echo "<h2 class='display-4 text-center'>EXEMPLE n°5 PREPARE+'?'+FETCH</h2><hr>";
$resultat->execute(array("Gallet"));//gallet va remplacer le '?' du dessus
$donnees = $resultat ->fetch(PDO::FETCH_ASSOC);
echo implode($donnees,'');
echo "<h2 class='display-4 text-center'>EXEMPLE n°6 PREPARE+':'+FETCH</h2><hr>";
$resultat=$pdo->prepare("SELECT*FROM employe WHERE nom=:nom");
//declaration d'un marqueur nominatif
$resultat->execute(array("nom" =>"zarouel"));
$donnees=$resultat->fetch(PDO::FETCH_ASSOC);
echo implode($donnees,'-');
echo "<h2 class='display-4 text-center'>EXEMPLE n°7 PREPARE+':'+FETCH_OBJ</h2><hr>";
//------------EXO-------------/----------------
//selectioner à l'aide d'une requete preparé les infos de l'employe 'Thoyer' et affiche ses données 
//avec la methode FETCH_OBJ


$result2 = $pdo->prepare("SELECT * FROM employes WHERE nom = :nom");
$result2->execute(array("nom" => "Thoyer"));

$donnees2 = $result2->fetch(PDO::FETCH_OBJ); // Retourne un objet issu de la classe $tdClass avec chaque indice comme proprieté public
echo $donnees2->field;
echo '<pre>';print_r($donnees2); echo'</pre>';
echo "prenom : " . $donnees2->prenom . '<hr>';

// La boucle foreach permet de passer en revu l'objet 'employe'

foreach($donnees2 as $key => $value)
{
    echo "$key - $value<hr>";
}
echo '<hr>';

echo "<h2 class='display-4 text-center'>exemple n° 8 TRANSACTION + REQUETE ET ANNULATION DE CELLE CI</h2><hr><br>";

$pdo->beginTransaction();

$result = $pdo->exec("UPDATE employes SET salaire = 1000");
echo "Nombre d'enregistrement affecté par l'UPDATE : $result";


$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC);
echo "<span>Avec le changement</span>";

echo '<table class="table table-dark text-center"><tr>';
    for($i = 0; $i < $resultat->columnCount(); $i++)
        {
            $colonne = $resultat->getColumnMeta($i);
            echo "<th>$colonne[name]</th>"; 
        }
    echo '</tr>';
    foreach($resultat as $key => $tab)
    {
        echo '<tr>';
        foreach($tab as $key1 => $value)
        {
            echo "<td>$value </td>";
        }
        echo '</tr>';
    }

echo '</table>';
echo '<br><hr><br>';

//  Si on avait voulu valider la transaction, nous aurions du pointer sur la méthode 'comit' --> $pdo->comit();

$pdo->rollBack(); // permet d'annuler la transaction et de revenir à l'état initial
// EXO : refaire un affichage de la table (requete + affichage)

$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC);
echo '<table class="table table-dark text-center"><tr>';
    for($i = 0; $i < $resultat->columnCount(); $i++)
        {
            $colonne = $resultat->getColumnMeta($i);
            echo "<th>$colonne[name]</th>"; 
        }
    echo '</tr>';
    foreach($resultat as $key => $tab)
    {
        echo '<tr>';
        foreach($tab as $key1 => $value)
        {
            echo "<td>$value </td>";
        }
        echo '</tr>';
    }

echo '</table>';
echo "<h2 class='display-4 text-center'>exemple n° 9 FETCH_CLASS</h2><hr><br>";
Class employes
{
public $id_employes;
public $prenom;
public $nom;
public $sexe;
public $service;
public $date_embauche;
public $salaire;

}

$result =$pdo->query("SELECT*FROM employe");
$objet = $result->fetchall(PDO::FETCH_CLASS,"Employes");
//permet de prendre les resultats de la requete et d'affecter les propriete d'objet.comme chaque valeur va etre re-associe a
// propriete de la class 

echo '<pre>';print_r($objet);echo'</pre>';

foreach($objet as $key =>$value)
{
    echo $value->prenom.'<hr>';
}



















