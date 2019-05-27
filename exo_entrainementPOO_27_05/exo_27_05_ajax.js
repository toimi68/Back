$(document).ready(function(){
//on ecoute l'evenement
$("#submit").click(function(e){
    //on empeche le rechargement de la page
    e.preventDefaut();
    ajax();
});
function afficheProduit(){
    var resultat =$('#resultat').val();
    console.log(resultat);

    var parameters ="resultat="+resultat;
    //console.log(parameters);
    $.post('ajax.php',parameters,function(data){
        $('resultat').html(sata.resultat);
    },'json');
}
});






//fin $(document).ready(function())




