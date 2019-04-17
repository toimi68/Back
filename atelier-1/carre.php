<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/carre.css">
    <title>carre</title>
</head>
<body>


<?php
if(empty($_GET))
{
?>
<div  id="a"></div>
    <a href="?choix=y">cliquez</a>



<?php
} elseif(!empty($_GET["choix"]) && $_GET["choix"]=="y"){
?>                                          
<div id="b"></div>
<a href="carre.php">retour</a>
<?php
}
?>
</body>
</html>