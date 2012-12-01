<?php

namespace Echecs\pageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleController extends Controller
{
    public function articlesByCatAction($name)
    {
        
        $categ = $this->getDoctrine()->getRepository('EchecspageBundle:Categorie:CategorieRepository')->findOneByNom($name);
        if( $categ != NULL)
        {
            
            $articles = $categ->getArticles();

            $nav = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findPagesOrdered();
            $categs = $this->getDoctrine()->getRepository('EchecspageBundle:Categorie:CategorieRepository')->findAll();       

            if(sizeof($articles)==0)
                {
                    return $this->render('EchecspageBundle::error.html.twig',array('error'=>'Aucun article dans cette catégorie.', 'categories'=> $categs, 'navigation' => $nav, 'categorie'=>$name));
                }
            else    
                {
                    return $this->render('EchecspageBundle:Articles:index.html.twig',array('articles'=>$articles, 'categories'=> $categs, 'navigation' => $nav, 'categorie'=>$name));
                }

        }
         else 
        {
                throw $this->createNotFoundException('Cette categorie n\'existe pas');
        }
        
    }
    
     public function showAction($id)
    {
         $article = $this->getDoctrine()->getRepository('EchecspageBundle:Article:ArticleRepository')->find($id);
         if( $article != NULL)
        {
         $categorie = $article->getIdCategorie()->getNom();
         $nav = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findPagesOrdered();
         $categs = $this->getDoctrine()->getRepository('EchecspageBundle:Categorie:CategorieRepository')->findAll();
         
         return $this->render('EchecspageBundle:Articles:show.html.twig',array('categories'=> $categs, 'navigation' => $nav, 'categorie'=>$categorie, 'article' =>$article));
         }
         else 
        {
            throw $this->createNotFoundException('Cet article n\'existe pas');
        }
    }
     
     public function createAction()
    {
        		$unArticle = new \Echecs\pageBundle\Entity\Article();
    			$unArticle->setTitre('Article de test');	
    			$unArticle->setContenu('Ceci est le contenu de mon article. Pour le moment il n\'est pas validé');	
    			$unArticle->setAuteurId('1');	
    			$unArticle->setDate('25/11/2012');
    			$unArticle->setEtat('1');	
    			    		
	    		$em = $this->getDoctrine()->getEntityManager();
                        $em->persist($unArticle);
                        $em->flush();
			    
			    return $this->redirect($this->generateUrl('_index', array('name' => 'Accueil')));
			   
    }
}
