<?php

namespace Echecs\pageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    public function indexAction($name)
    {
        $mapage = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findOneByNomPage($name);
        $nav = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findPagesOrdered();
        $categs = $this->getDoctrine()->getRepository('EchecspageBundle:Categorie:CategorieRepository')->findAll();       
        
        return $this->render('EchecspageBundle:Pages:index.html.twig',array('page' => $mapage, 'categories'=> $categs, 'navigation' => $nav));
    }
}
