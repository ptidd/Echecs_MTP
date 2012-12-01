<?php
namespace Echecs\pageBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ArticlesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class ArticlesRepository extends EntityRepository
{

	public function findAllArticlesByCat($cat)
		{
                        $categ = $this->getDoctrine()->getRepository('EchecspageBundle:Categorie:CategorieRepository')->findOneByNom($cat);
			return $this->getEntityManager()->createQuery('Select a from EchecspageBundle:Article a where a.idcategorie='.$categ)->getResult();
			
		}
        public function findAllArticlesPublies($cat)
		{
                       $categ = $this->getDoctrine()->getRepository('EchecspageBundle:Categorie:CategorieRepository')->findOneByNom($cat);
                       
			return $this->getEntityManager()->createQuery('Select a from EchecspageBundle:Article a where a.etat=2 and a.idcategorie='.$categ)->getResult();
			
		}
}
