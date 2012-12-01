<?php

namespace Echecs\pageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategorieController extends Controller
{
    public function indexAction($name)
    {
        $mapage = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findOneByNomPage($name);
        $nav = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findPagesOrdered();
                
        
        return $this->render('EchecspageBundle:Pages:index.html.twig',array('page' => $mapage, 'navigation' => $nav));
    }
    
    public function chargeCategAction()
    {
        $mapage = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findOneByNomPage($name);
        $nav = $this->getDoctrine()->getRepository('EchecspageBundle:Pages:PagesRepository')->findPagesOrdered();
                
        
        return $this->render('EchecspageBundle:Pages:index.html.twig',array('page' => $mapage, 'navigation' => $nav));
    }
}
