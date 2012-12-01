<?php

namespace Echecs\pageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Echecs\pageBundle\Repository\ArticlesRepository")
 * 
 */
class Article 
{
    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $titre;
    
     /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $motifRefusArticle;
    
    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="articles")
     * @ORM\JoinColumn(name="idcategorie", referencedColumnName="id")
     */
    private $idcategorie;

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $etat;

    /**
     * @ORM\Column(type="integer")
     */
    private $auteur_id;


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
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }
    
    
     public function setMotif($motif)
    {
        $this->motifRefusArticle = $motif;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motifRefusArticle;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set idcategorie
     *
     * @param integer $idcategorie
     * @return Article
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;
    
        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return integer 
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Article
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set auteur_id
     *
     * @param integer $auteurId
     * @return Article
     */
    public function setAuteurId($auteurId)
    {
        $this->auteur_id = $auteurId;
    
        return $this;
    }

    /**
     * Get auteur_id
     *
     * @return integer 
     */
    public function getAuteurId()
    {
        return $this->auteur_id;
    }

    /**
     * Set motifRefusArticle
     *
     * @param string $motifRefusArticle
     * @return Article
     */
    public function setMotifRefusArticle($motifRefusArticle)
    {
        $this->motifRefusArticle = $motifRefusArticle;
    
        return $this;
    }

    /**
     * Get motifRefusArticle
     *
     * @return string 
     */
    public function getMotifRefusArticle()
    {
        return $this->motifRefusArticle;
    }
}