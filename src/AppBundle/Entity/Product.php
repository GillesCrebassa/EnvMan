<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use AppBundle\Entity\ProductParameter;
use AppBundle\Entity\ServerCategory;
/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 * @UniqueEntity("name") 
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, unique=true)
     * @Assert\NotBlank()
     * 
     */
    
    private $name;

    /**
     * @var string
     *
     * 
     * @ORM\Column(name="description", type="text", length=255, nullable=true)
     */
    private $description;
  

    /**
     * @ORM\OneToMany(targetEntity="ProductParameter", mappedBy="product")
     */    
    private $productParameter;
    
    /**
     * @ORM\ManyToMany(targetEntity="ServerCategory", mappedBy="product")
     **/    
    
    private $serverCategory;
    
    
    public function __construct()
    {
        $this->productParameter = new ArrayCollection();
        $this->serverCategory = new ArrayCollection();
    }    
    
    public function __toString()
    {
           return "{$this->getName()}";
    }
    
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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Add ProductParameter
     *
     * @param \AppBundle\Entity\ProductParameter $ProductParameter
     *
     * @return ProductParameter
     */
    public function addProductParameter(\AppBundle\Entity\ProductParameter $ProductParameter)
    {
        $this->ProductParameter[] = $ProductParameter;

        return $this;
    }

    /**
     * Remove ProductParameter
     *
     * @param \AppBundle\Entity\ProductParameter $ProductParameter
     */
    public function removeProductParameter(\AppBundle\Entity\ProductParameter $ProductParameter)
    {
        $this->ProductParameter->removeElement($ProductParameter);
    }

    /**
     * Get ProductParameter
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductParameter()
    {
        return $this->ProductParameter;
    }
    
    
    public function addServerCategory(\AppBundle\Entity\ServerCategory $servercategory)
    {
        $this->serverCategory[] = $servercategory; 
    }

}
