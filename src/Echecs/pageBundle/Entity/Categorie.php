<?php

namespace Echecs\pageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Echecs\pageBundle\Repository\CategorieRepository")
 * 
 * 
 */
class Categorie
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
    
     /**
     * @var array articles
     *
     * @ORM\OneToMany(targetEntity="Article", mappedBy="idcategorie")
     */
    protected $articles;
    
    /**
     * Set articles
     *
     * @param array $article
     * @return Categorie
     */
    public function setArticles($article)
    {
            $this->articles = $article;
    
        return $this;
    }

    /**
     * Get articles
     *
     * @return array 
     */
    public function getArticles()
    {
        return $this->articles;
    }
    
    
   

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

}