<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ProductParameter
 *
 * @ORM\Table(name="product_parameter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductParameterRepository")
 */
class ProductParameter
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="hardcoded", type="boolean")
     */
    private $hardcoded;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productParameter")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    
    private $product;

    public function __construct()
    {
        $this->product = new ArrayCollection();
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
     * @return ProductParameter
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
     * @return ProductParameter
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
     * Set hardcoded
     *
     * @param boolean $hardcoded
     *
     * @return productParameter
     */
    public function setHardcoded($hardcoded)
    {
        $this->hardcoded = $hardcoded;

        return $this;
    }

    /**
     * Get hardcoded
     *
     * @return bool
     */
    public function getHardcoded()
    {
        return $this->hardcoded;
    }
    
    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return productParameter
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
    
}
