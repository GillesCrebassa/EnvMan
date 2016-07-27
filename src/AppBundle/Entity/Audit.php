<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * ServerCategory
 *
 * @ORM\Table(name="audit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuditRepository")
 */
class Audit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="ServerCategory", inversedBy="Audit")
     * @ORM\JoinColumn(name="servercategory_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     */
    private $servercategory;

    /**
     * @ORM\ManyToOne(targetEntity="Server", inversedBy="Audit")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     */
    private $server;

    /**
     * @ORM\ManyToOne(targetEntity="ProductParameter", inversedBy="Audit")
     * @ORM\JoinColumn(name="productparamer_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     */
    private $productParameter;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Result", type="string", length=80, unique=false)
     */
    private $result;

    
    public function __construct()
    {
        $this->servercategory = new ArrayCollection();
        $this->server= new ArrayCollection();
        $this->productParameter = new ArrayCollection();
    }    
/*
    public function __toString()
    {
           return "{$this->getName()}";
    }
*/    
    
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set server
     *
     * @param \AppBundle\Entity\Server $server
     *
     * @return Audit
     */
    public function setServer(\AppBundle\Entity\Server $server = null)
    {
        $this->server = $server;
        return $this;
    }

    /**
     * Get server
     *
     * @return \AppBundle\Entity\Server
     */
    public function getServer()
    {
        return $this->server;
    }

    
    /**
     * Set serverCategory
     *
     * @param \AppBundle\Entity\ServerCategory $servercategory
     *
     * @return Audit
     */
    public function setServerCategory(\AppBundle\Entity\ServerCategory $servercategory = null)
    {
        $this->servercategory = $servercategory;
        return $this;
    }

    /**
     * Get serverCategory
     *
     * @return \AppBundle\Entity\ServerCategory
     */
    public function getServerCategory()
    {
        return $this->servercategory;
    }

    /**
     * Set ProductParameter
     *
     * @param \AppBundle\Entity\ProductParameter $productparameter
     *
     * @return Audit
     */
    public function setProductParameter(\AppBundle\Entity\ProductParameter $productparameter = null)
    {
        $this->productParameter = $productparameter;
        return $this;
    }

    /**
     * Get productParameter
     *
     * @return \AppBundle\Entity\ProductParameter
     */
    public function getProductParameter()
    {
        return $this->productParameter;
    }    
    
}

