<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formulaire FRUITS PHP</title>
</head>
<body>
    <!-- 1. Réaliser un formulaire HTML permettant de selectionner un fruit (liste déroulante) et de saisir un poids (champs input)/solution on créer une value et on y plazce notre fonction comme valeur(cf form-group)-->
    <?php
    if(isset($_POST['poids'])) echo $_POST['poids']?>">"
    <!--2. Traitement permettant d'afficher le prix en passant par la fonction déclarée 'calcul'



    3. Faire en sorte de garder le dernier fruit selectionné et le dernier poids saisi dans le formulaire lorsque celui ci est validé -->
    <div class="container">
        <h1 class="display-4 text-center">FORMULAIRE FRUIT</h1><hr>
    <?php 
    echo'<pre>'; print_r($_POST); echo '</pre>';
if($_POST)//si je valide le formulaire je rentre deds
{
    echo calcul($_POST['fruits'],$_POST['poids']).'<hr>';
    //on transmet les données saisies ds le formulaire à la fonction calcul grace à la methode $_POST
}


    ?>
            <form class="col-md-4 offset-md-4" method="post" action=""> 
                <div class="form-group">
                    <label for="fruit">Fruit</label>
                    <select class="form-control" id="fruit" name="fruit">
                        <option value="cerises"<?php if(isset($_POST['fruit'])&&$_POST['fruit']=='cerise') echo 'selected' ?>>Cerises</option>
                        <option value="bananes"<?php if(isset($_POST['fruit'])&&$_POST['fruit']=='bananes') echo 'selected' ?>>Bananes</option>
                        <option value="pommes"<?php if(isset($_POST['fruit'])&&$_POST['fruit']=='pommes') echo 'selected' ?>>Pommes</option>
                        <option value="peches"<?php if(isset($_POST['fruit'])&&$_POST['fruit']=='peches') echo 'selected' ?>>Pêches</option>
 <!--facon ternaire php7
 option value="peches"<?=(isset($_POST[fruit])&&$_POST['fruit']=='cerise')?'selected':'',>                       
                    </select>
                </div>
                <div class="form-group">
                    <label for="poids">Poids</label>
                    <input type="text" class="form-control" id="poids" name="poid" placeholder="Entrer poids" value="<?php
    if(isset($_POST['poids'])) echo $_POST['poids']?>">
                </div>
                <button type="submit" class="col-md-12 btn btn-dark">Calcul</button>
            </form>
    </div>
</body>
</html>