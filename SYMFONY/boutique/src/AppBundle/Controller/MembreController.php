<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Membre;
use AppBundle\Form\MembreType;

class MembreController extends Controller
{

    //-------------------INSCRIPTION----------------------------

    /** 
     * @Route("/inscription/", name="inscription")
     * 
     */
    public function inscriptionAction(Request $request)
    {
        $membre = new Membre; // On crée un objet membre de l'entité produit (vide)

         $form =$this -> createForm(MembreType::class, $membre);
        
         $form -> handleRequest($request);

         if($form -> isSubmitted() && $form -> isValid()) 
         {

            $em = $this ->getDoctrine() -> getManager(); // on récup le manager
            $em -> persist($membre); // on enregistre dans le systeme l'objet
            $membre -> setStatut('0');
            $em ->flush(); // enregistre dans la BDD

            $request -> getSession() -> getFlashBag() -> add('success', 'Félicitations vous êtes enregistré. Connectez-vous !');

            return $this ->redirectToRoute('inscription');
     // localhost:8000/inscription
         }



        $params = array(
             'MembreForm' =>$form ->createView()
        );
        return $this -> render('@App/Membre/inscription.html.twig', $params);
    }

      //-------------------PROFIL----------------------------
    
/** 
 * @Route("/profil/", name="profil")
 * 
 */
public function profilAction()
{
    $params = array();
    return $this -> render('@App/Membre/profil.html.twig', $params);
}  

}