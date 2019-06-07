<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Produit;

class ProduitController extends Controller
{

   /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){
			//1:recupérer les infos
			$repo = $this ->getDoctrine() ->getRepository(Produit::class);
			$produits = $repo -> findAll(); 

			//1.2 : recupérer les categories
			$em = $this-> getDoctrine() -> getManager();

			//Create Query(il y a du SQL)

			$query = $em -> createQuery ("SELECT DISTINCT(p.categorie) FROM AppBundle\Entity\Produit p ORDER BY p.categorie ASC");
			$categories = $query->getResult();

			//Query builder
			$query = $em -> createQueryBuilder();
			$query
				->select('p.categorie ')
				->distinct(true)
				->from(produit::class,'p')
				->orderBy('p.categorie','ASC');
//SELECT DISTINCT(categorie) FROM produit ORDER BY categorie ASC
				$categories = $query ->getQuery()-> getResult();
//là que du PHP

			//2:retourner une vue	
			 $params = array(
				'produits'=>$produits, 
				'categories'=> $categories  //c'est la vue de create Query
			 );

			return $this -> render('@App/Produit/index.html.twig', $params);
		}
		
	/**
	* @Route("/produit/{id}/", name="produit")
	* www.maboutique.com/produit/12
	*/
	public function produitAction($id){
		//Methode 1 :Repository		
		$repo = $this ->getDoctrine() ->getRepository(Produit::class);
		$produit = $repo -> find($id);

		// Methode 2 :EntityManager
		$em = $this ->getDoctrine() -> getManager();
		$produit = $em ->find(Produit::class,$id);


		$params = array(
			'id' => $id,
			'produit' => $produit
		);
		
		return $this -> render('@App/Produit/show.html.twig', $params);
	}

	/** 
	 * @Route("/categorie/{cat}/", name="categorie")
	 *
	 */
	public function categorieAction($cat)
	{
			//1 - recuperer les infos
           $repo = $this->getDoctrine()->getRepository(Produit::class);
           $produits = $repo->findBy(array('categorie' => $cat));

			$categories = $repo -> getAllCategories();

           // 2 - afficher la vue
           $params = array(
			   'produits' => $produits,
			   'categories' => $categories
           );
			return $this -> render ('@App/Produit/index.html.twig',$params)	;  
	}
	
	
	
	
	
}
