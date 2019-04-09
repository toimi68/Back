<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
 crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container">
  <h2 class="display-4 text-center">01.pdo:connexion</h2><hr>
<?php
//class PDO
//{

//methodes(fonctions)
//propriete(variable)
//public fonction query()
//traitement....

//connexion BDD:
$pdo =new PDO ('mysql:host=localhost;dbname=entreprise','root','',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
echo '<pre>';var_dump($pdo);echo '</pre>';
//affiche les differentes methodes issues de PDO 
echo '<pre>';print_r($pdo);echo'</pre>';
//pdo est une classe predefini en PHP qui permet de se connecter à une base de données.cette classe possede ses propres methodes
//(fonctions )qui ns permettrons executer  de formuler une requeteSQL $pdo est l'objet qui permet d'interagir,d'interroger BDD
//argument 1 (serveur + BDD) :2 (identifiants)/3(mdp)/4 (option PDO)
echo '<pre>';var_dump($pdo); echo '</pre>';
echo '<pre>';print_r(get_class_methods($pdo)); echo'</pre>';
echo '<hr><h2 class="display-4 text-center ">02.PDO :EXEC - INSERT/UPDATE /DELETE</h2><hr>';

//EXO formuler la requete vous permettant de se inserer ds la BDD entreprise (table employes)
if(isset($true))
{$resultat = $pdo->exec("INSERT INTO employes (prenom,nom,sexe,service,date_embauche,salaire)
value ('gregory','lacroix','m','PDG', '2019-04-09',15000)");
echo "nombre d'enregistrement affecté par l'INSERT :$resultat<br>";
echo "dernier ID genere : ".$pdo->lastInsertId().'<hr>';}

//methode 'exec ' issue de classe predefinie PDO elle permet de formuler et d'executer des requetes SQL c'est en argument(entre parentheses de la methode ) que l'on envoit la requete compléte
//exec()est prevu pr des requetes ne retournant pas de jeu de reqsultat(INSERT/UPDATE/DELETE)
//UPDATE
//EXO realiser le traitement permettant de modifier le salaire de l'employé n°350 par 1200
//reponse:
$resultat =$pdo->exec("UPDATE employes SET salaire =1200 WHERE id_employes =350");
echo "nombre d'enregistrement affecté par l'UPDATE :
    $resultat<br>";

//permet de ne plus avoir l'INSERT à chaque rechargement de page
$resultat =$pdo->exec("DELETE employes SET salaire =350 WHERE id_employes =350");
echo "nombre d'enregistrement affecté par l'UPDATE :
    $resultat<br>";
echo '<hr><h2 class="display-4 text-center"> 03.PDO :select+fetch_assoc(1 seul resultat)</h2><hr>';

$result = $pdo->query("SELECT*FROM employes WHERE id_employes=415");
echo '<pre>';var_dump($resultat);echo'</pre>';
echo '<pre>';print_r(get_class_methods($result));echo '</pre>';
//on va avoir un tableau array indexe avec le nom des champs
//$employe=$result->(PDO::fetch_NUM).ON AURA UN tableau indexe numetriquement
//$employe=$result->(PDO::FETCH_BOTH)Là on aura un tableau avec tout
$employe =$result-> fetch(PDO::FETCH_ASSOC);
echo '<pre>';print_r($employe);echo '</pre>';
//EXO afficher les info à l'aide d'1 affichage conventionel  en excluant l'id_employes
echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-success text-center">';
foreach($employe as $key => $value)
{
    if($key!= 'id=_employes')
    {
        echo "$key :$value <hr>";
    }
}
echo '</div>';
//QUERY 1 methode issue de la class PDO qui permet de formuler et executer une requete SQL
//c'est pour requete qui retourne un jeu de resultat(SELECT)
//lorsqu'onn l'execute on obtient tjrs un objet(PDOstatement)issu d'une autre classe
echo '<hr><h2 class="display-4 text-center"> 04.PDO :QUERY SELECT WHILE</h2><hr>';
$resultat=$pdo->query("SELECT*FROM employes");
echo "<pre>";var_dump($resultat);echo "</pre>";
$employes =$resultat->fetch(PDO::FETCH_ASSOC);
echo "<pre>";print_r($employes);echo"</pre>";
while($employes=$resultat->fetch(PDO::FETCH_ASSOC))
{
    //echo"<pre>";print_r($employes);echo"</pre>";

//en executant 1 requete de select° on obtient un objet inexpoiltable pdostatement c'est par la method fetch  qui va permettre un retour tableau
//pr recupérer l'ensemble des employés ns devons faire une boucle
//$employé receptionne un tableau aray pour chaque employés la boucle "while " le fait tant qu'il y a un employé 
//PDO::FETCH_ASSOC le :: ns permet de, faire appel à la cstte de la clase PDO SS L INSTANCIER(créer un objet de la classe)
echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-success text-center">';
echo $employes['nom'].'<hr>';//pr chaque tour de boucle on a un tableau array on va crocheter aux differents indices
echo $employes['prenom'].'<hr>';
echo $employes['service'].'<hr>';
echo $employes['salaire'].'<hr>';
echo '</div>';

}
echo '<hr><h2 class="display-4 text-center"> 04.PDO :QUERY FETCHAL FETCH_ASSOC(plusieurs resultats)</h2><hr>';
$resultat = $pdo->query("SELECT*FROM employes");
$donnees = $resultat->fetchAll(PDO ::FETCH_ASSOC);//fetchAll retourne un tableau multidimensionel avec chaque tableau indexé numeriquement(de chaque employes)
echo '<pre>';print_r($donnees);echo'</pre>';
//EXO /AFFICHER SUCCESSIVEMENT les données de chaque employes à l'aide d'une boucle foreach(indice:boucle imbriquée)

foreach($donnees as $key => $tab)
{
    echo '<div class="col-md-4 offset-md-4 mx-auto alert alert-success text-center">';

  foreach($tab as $key2=>$value) 
  {
      echo "$key2:$value<hr>";
  } 
  //LA BOUCLE FOREACH PERMET DE PASSER EN REVUE chaque tableau de chaque employé
  //ARRAY [nom]=> 'touhami'
        echo "$key :$value <hr>";
        echo'</div>';
    }
//$tab receptionne un tableau array d'un employé par tour de boucle [0] =>ARRAY
echo '<hr><h2 class="display-4 text-center"> 04.PDO :QUERY FETCH BDD</h2><hr>';
//EXO affiche  la liste des bases de données puis les mettre ds une liste ul li




?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
