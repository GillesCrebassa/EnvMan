<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use AppBundle\Entity\EnvDetails;


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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EnvDetails")
     * @ORM\JoinColumn(name="envDetails_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     * @Assert\NotNull() 
     */
    private $envDetails;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ProductParameter")
     * @ORM\JoinColumn(name="productparamer_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     * @Assert\NotNull() 
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
        $this->envDetails = new ArrayCollection();
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
     * Set envDetails
     *
     * @param \AppBundle\Entity\EnvDetails $envDetails
     *
     * @return Audit
     */
    public function setEnvDetails(\AppBundle\Entity\EnvDetails $envDetails = null)
    {
        $this->envDetails = $envDetails;
        return $this;
    }

    /**
     * Get envDetails
     *
     * @return \AppBundle\Entity\EnvDetails
     */
    public function getEnvDetails()
    {
        return $this->envDetails;
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
    
    
    /**
     * Set result
     *
     * @param string $result
     *
     * @return Audit
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }    
  
    
}

