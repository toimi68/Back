<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Produit; 
use AppBundle\Entity\Membre; 
use AppBundle\Entity\Commande; 
use AppBundle\Entity\DetailsCommande; 
use AppBundle\Form\ProduitType;


class AdminController extends Controller
{

	// CRUD PRODUIT

	/**
	* @Route("/admin/produit/", name="admin_produit")
	* www.maboutique.com/admin/produit/
	*/
	public function adminProduitAction(){
		
		$repo = $this -> getDoctrine() -> getRepository(Produit::class);	
		$produits = $repo -> findAll(); 
		
		
		$params = array(
			'produits' => $produits
		);
		return $this -> render('@App/Admin/list_produit.html.twig', $params);
	}







	/**
	* @Route("/admin/produit/add/", name="admin_produit_add")
	

	* 
	*/
	public function adminProduitAddAction(Request $request){
		
		$produit = new Produit; 
		// On créé un objet produit de l'entité produit (vide)
		
		/*$produit -> setReference('XXX');
		$produit -> setCategorie('pull');
		$produit -> setPublic('m');
		$produit -> setPrix('25.99');
		$produit -> setStock('150');
		$produit -> setTitre('Pull marinière');
		$produit -> setPhoto('mariniere.jpg');
		$produit -> setDescription('Super pull façon bretonne');
		$produit -> setTaille('L');
		$produit -> setCouleur('blanc et bleu');*/

		$form = $this -> createForm(ProduitType::class,$produit);
		//on parle d'aller hydrater l'objet(on rempli l'objet avec les infos),on créer un formulaire du type produit on le lis à notre objet
		$form -> handleRequest($request);
		//lier definitivement l'objet '$produit'au formulaire,elle permet de traiter les info en POST
		if($form->isSubmitted() && $form ->isValid()){
			$em =$this ->getDoctrine ()->getManager();//on recupere le manager
			$em -> persist($produit);
			$produit->uploadPhoto();
			//on enregistre ds le sys objet
			$em ->flush();//on execute l'enregistrement avec le flush
			$request ->getSession()->getFlashBag()->add('success','le produit',$produit->getId());
			
			return $this->redirectToRoute('admin_produit');
		}
		
		
		$params = array(
			'produitForm'=> $form -> createView(),
			'title' => 'Ajouter un Produit'
		);
		//createView()permet de generer la partie visuelle (HTML)du formulaire

		return $this -> render('@App/Admin/form_produit.html.twig', $params);
	}
	//localhost:8000/admin/produit/add
	//localhost:8000	
	
	/**
	* @Route("/admin/produit/update/{id}/", name="admin_produit_update")
	*
	*/
	public function adminProduitUpdateAction($id,Request $request){
		
		$em = $this -> getDoctrine() -> getManager();
		
		// Je récupère le produit à modifier : 
		$produit = $em -> find(Produit::class, $id);
		$form = $this ->createForm(ProduitType::class, $produit);
		//on hydrate le formulaire
		$form -> handleRequest($request);
		if($form -> isSubmitted() && $form ->isValid()){

		
		// je le modifie 
		//$produit -> setPrix('1000');
		
		// Je l'enregistre : 
		$em -> persist($produit);
		$produit -> uploadPhoto();
		$em -> flush();

		$request -> getSession()->getFlashBag()->add('success','le produit'.$produit ->getTitre() . 'a bien été modifié!');
		return $this -> redirectToRoute('admin_produit');
		}
		$params = array(
			'id' => $id,
			'produitForm' => $form->createView(),
			'title'=>'Modifier produit' .$produit->getTitre(),
			'photo'=>$produit-> getPhoto()


		);
		return $this -> render('@App/Admin/form_produit.html.twig', $params);
	}
	//localhost:8000/admin/produit/update/11
	/** 
	* @Route("/admin/produit/delete/{id}/", name="admin_produit_delete")
	*
	*/
	public function adminProduitDeleteAction($id, Request $request){
		
		$em = $this -> getDoctrine() -> getManager();
		
		// Récupère l'objet produit
		$produit = $em -> find(Produit::class, $id);
		
		// je supprime le produit :
		$produit->removePhoto(); 
		$em -> remove($produit);
		$em -> flush(); 
		
		$request -> getSession() -> getFlashBag() -> add('success', 'Le produit N°' . $id . ' a bien été supprimé');
		return $this -> redirectToRoute('admin_produit');
	}
	// test : localhost:8000/admin/produit/delete/12

	
	// CRUD MEMBRE
	/**
	* @Route("/admin/membre/", name="admin_membre")
	* www.maboutique.com/admin/membre/
	*/
	public function adminMembreAction(){
		$repo =$this -> getDoctrine()->getRepository(Membre::class);
		$membre =$repo->findAll();



		$params = array('membre' => $membres);
	
			

		return $this -> render('@App/Admin/list_membre.html.twig', $params);
	}

	/**
	* @Route("/admin/membre/add/", name="admin_membre_add")
	* 
	*/
	public function adminMembreAddAction(){
		$params = array();
		return $this -> render('@App/Admin/form_membre.html.twig', $params);
	}
	
	/**
	* @Route("/admin/membre/update/{id}/", name="admin_membre_update")
	*
	*/
	public function adminMembreUpdateAction($id){
		
		$params = array(
			'id' => $id
		);
		return $this -> render('@App/Admin/form_membre.html.twig', $params);
	}

	/** 
	* @Route("/admin/membre/delete/{id}/", name="admin_membre_delete")
	*
	*/
	public function adminMembreDeleteAction($id, Request $request){
		$params = array();
		$request -> getSession() -> getFlashBag() -> add('success', 'Le membre N°' . $id . ' a bien été supprimé');
		return $this -> redirectToRoute('admin_membre');
	}
	// test : localhost:8000/admin/membre/delete/12


	// CRUD COMMANDE

	/**
	* @Route("/admin/commande/", name="admin_commande")
	* www.maboutique.com/admin/commande/
	*/
	public function adminCommandeAction(){
		$repo = $this -> getDoctrine()->getRepository(Commande::class);
		$commandes = $repo -> findAll();
		$params = array('commandes'=>$commandes);
		
		return $this -> render('@App/Admin/list_commande.html.twig', $params);
	}

	/**
	* @Route("/admin/commande/add/", name="admin_commande_add")
	* 
	*/
	public function adminCommandeAddAction(){
		$params = array();
		return $this -> render('@App/Admin/form_commande.html.twig', $params);
	}
	
	/**
	* @Route("/admin/commande/update/{id}/", name="admin_commande_update")
	*
	*/
	public function adminCommandeUpdateAction($id){
		
		$params = array(
			'id' => $id
		);
		return $this -> render('@App/Admin/form_commande.html.twig', $params);
	}

	/** 
	* @Route("/admin/commande/delete/{id}/", name="admin_commande_delete")
	*
	*/
	public function adminCommandeDeleteAction($id, Request $request){
		$params = array();
		$request -> getSession() -> getFlashBag() -> add('success', 'La commande N°' . $id . ' a bien été supprimée');
		return $this -> redirectToRoute('admin_commande');
	}
	// test : localhost:8000/admin/commande/delete/12
}//-------------------------------COMMANDE---------------------------------/