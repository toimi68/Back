<?php
//-----------------FONCTION MEMBRE-----------
function internauteEstConnecte()//fonction basique sin le membre est connecté
{
    if(!isset($_SESSION['membre']))//si l'indice membre n'est pas defini ds la session c'est qu'il nest pas passé par connexion page
    {
    return false;
    }
    else//sinon l'indice membre est defini,on retourne true
    {
        return true;
    }
}//-----------------FONCTION ADMIN-------------
function internauteEstConnecteEtEstAdmin()
{
    if (internauteEstConnecte()&& $_SESSION['membre']['statut']== 1)
    {  
        return true;
    }


    else
    {
        return false;
    }
}
