<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire3bis</title>
    <?php
    echo'<pre>';print_r($_POST);echo'</pre>';
foreach($_POST as $key => $value)
{
 echo"$key" ; 
 echo "$value<br>";  
}




?>
</head>
<body>
    <div class=saisie>
    </div>

</body>
</html>