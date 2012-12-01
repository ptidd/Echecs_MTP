<?php

namespace Echecs\pageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Echecs\pageBundle\Repository\PagesRepository")
 */
class Pages
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
     * @var string $nomPage
     *
     * @ORM\Column(name="nomPage", type="string", length=255 , unique=true)
     */
    private $nomPage;

    /**
     * @var string $contenu
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var integer $ordre
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;


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
     * Set nomPage
     *
     * @param string $nomPage
     * @return Pages
     */
    public function setNomPage($nomPage)
    {
        $this->nomPage = $nomPage;
    
        return $this;
    }

    /**
     * Get nomPage
     *
     * @return string 
     */
    public function getNomPage()
    {
        return $this->nomPage;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Pages
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
     * Set ordre
     *
     * @param integer $ordre
     * @return Pages
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
}
