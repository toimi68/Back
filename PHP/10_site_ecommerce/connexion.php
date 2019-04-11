<?php
require_once('include/init.php');

if(isset($_GET['action'])&&$_GET['action']=='validate')
{
    $validate.='<div class="col-md-6 offset-md-3 text-center alert alert-success">FELICITATIONS
    vous êtes inscrit sur le site.vouspouvez dés à present vous connecter!!</div>';
}
require_once('include/header.php');



?>
<h1 class="display-4 text-center">CONNEXION</h1><hr>
<?php
echo $validate;
?>


<?php
require_once('include/footer.php');

?>
