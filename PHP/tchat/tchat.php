<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Tchat !!</title>
</head>
<body>
    <!--
        Exercice : espace de dialogue (tchat)
        1.Modélisation et création
        BDD : tchat
        Table : commentaire
               id_commentaire // INT(3) PK - AI
               pseudo         // VARCHAR(20)
               dateEnregistrement // DATETIME
               message        // TEXT
        2. connexion à la BDD
        3. Création d'un formulaire HTML (pour l'ajout de message)
        4. Récupération et affichage des saisies en PHP ($_POST)
        5. Requete SQL d'enregistrement (INSERT)
        6. Affichage des messages
    -->
    <h1 class="display-4 text-center border border-dark text text-info">Formulaire Tchat</h1>
   <?php
   // 2. connexion à la BDD
   $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO:: MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
   // 4. Récupération et affichage des saisies en PHP ($_POST)
   //echo '<pre>'; print_r($_POST); echo '</pre>';
   // 5. Requete SQL d'enregistrement (INSERT)
   extract($_POST); // permet de transformer chaque indice du formulaire en variable
   if($_POST)
   {
    //    $resultat = $bdd->exec("INSERT INTO commentaire (pseudo, dateEnregistrement,message) VALUES ('$_POST[pseudo]', NOW(), '$message')");
       // echo "Nombre d'enregistrement : $resultat<br>";
    //INJECTION SQL
    //ok'); DELETE FROM commentaire;()là on va supprimer tous les commentaires c'est:
    //$req="INSERT INTO commentaire (pseudo, dateEnregistrement,message) VALUES ('$_POST[pseudo]', NOW(), '$message')"; //ok')'; DELETE FROM
    //$resultat=$bdd->exec($req);
    //echo $req;
   
    $resultat=$bdd->prepare("INSERT INTO commentaire (pseudo, dateEnregistrement,message) VALUES (:pseudo, NOW(),:message )");
    $resultat->bindValue(':pseudo', $pseudo,PDO::PARAM_STR);
    $resultat->bindValue(':message', $message,PDO::PARAM_STR);
    $resultat->execute();

    //FAILLES XSS
    /*
        <script>
            var point = true;
            while(point == true)
            alert('j'ai planté ton site,ooh);
        </script>

        <style>
        body{
            display: none;
        }
        </style>
        pour parer aux failles Xss il existe plusieurs façons predefini
        -strip_tags():permet de supprimer les balises HTML 
        -htmlspecialchars():permet de rendtre inoffensif les balises HTML
        -htmlentities():permet de convertir les balises HTML en entité html
    */
    foreach ($_POST as $key => $value) {
        $_POST[$key] = strip_tags(trim($value));//on passe en revu le formulaire en executant la fonct°strip_tags
        //sur chaque valeur saisie ds le formulaire
        //trim() c'est une fonction predefinie qui supprime les espaces en debut et fin de chaine
    }
   }
       // 6. Affichage des messages
   $resultat = $bdd->query("SELECT pseudo, message, DATE_FORMAT(dateEnregistrement,'%d/%m/%Y') AS datefr, DATE_FORMAT(dateEnregistrement, '%h:%i:%s') AS heurefr FROM commentaire ORDER BY dateEnregistrement DESC");

   while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC))
   {
       //   echo '<pre>'; print_r($commentaire); echo '</pre>';
           echo '<div class="col-md-6 offset-md-3 alert alert-info text-center">';
           echo "<div><em>Par $commentaire[pseudo], le $commentaire[datefr] à $commentaire[heurefr]</em></div><hr>";
           echo "<div class='text-justify'>$commentaire[message]</div>";
           echo '</div>';
   }

   ?>

    <!-- 3. Création d'un formulaire HTML (pour l'ajout de message)  -->

        <form class="col-md-4 offset-md-4" method="post" action="">
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" class="form-control" id="message" name="message" col="3"></textarea>
            </div>
        <button type="submit"  class="btn btn-dark">Poster</button>

</body>
</html>