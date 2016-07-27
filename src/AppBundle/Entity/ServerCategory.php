<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * ServerCategory
 *
 * @ORM\Table(name="server_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerCategoryRepository")
 * @UniqueEntity("name")
 */
class ServerCategory
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
     * @ORM\Column(name="Name", type="string", length=30, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="EnvDetails", mappedBy="servercategory")
     */    
    private $envDetails;

    /**
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="serverCategory", indexBy="id", cascade={"persist"})
     * @ORM\JoinTable(name="product_servercategory",
     *  joinColumns={@ORM\JoinColumn(name="server_category_id",referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="product_id", referencedColumnName="id")}
     * )
     **/    
    
    private $product;
    
    public function __construct()
    {
        $this->envDetails = new ArrayCollection();
        $this->product = new ArrayCollection();
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
     * @return ServerCategory
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
     * Get envDetails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnvDetails()
    {
        return $this->envDetails;
    }

    
    /**
     * Get product
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduct()
    {
/*
        $products = [];
        foreach ($this->product as $product) {
//            $products[] = $product->getName();
            $products[] = $product;
        }
    return $products;
 * 
 */
        return $this->product;
    }

  /**
   * Set product.
   *
   * @param ArrayCollection $products
   * @return ServerCategory
   */
    public function setProduct($products) {
        $logger = $this->get('logger');
        $logger->info('GCR:pass setProduct !!!');
        
        $this->product = $products;
        $logger->info('GCR:pass setProducts assigned!!!');
        return $this;
    }

  /**
   * Add product.
   *
   * @param ArrayCollection $product
   * @return ServerCategory
   */    
    public function addProduct(Product $product)
    {
        $logger = $this->get('logger');
        $logger->info('GCR:pass addProduct !!!');
        $product->addServerCategory($this); // synchronously updating inverse side
        $this->product[] = $product;
        return $this;
    }    
    
 /**
   * Remove product
   *
   * @param Product $product
   * @return ServerCategory
   */
    public function removeProduct(Product $product) {
        $this->product->removeElement($product);
        return $this;
    }    
    
}

