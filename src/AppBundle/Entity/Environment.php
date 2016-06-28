<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Environment
 *
 * @ORM\Table(name="environment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnvironmentRepository")
 */
class Environment
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
     * @ORM\Column(name="Name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="EnvDetails", mappedBy="environment")
     */    
    private $envDetails;
    
    public function __construct()
    {
        $this->envDetails = new ArrayCollection();
    }    

    public function __toString()
    {
           return "{$this->getName()} {$this->getDescription()}";
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
     * @return Environment
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
     * @return Environment
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
     * Add env details
     *
     * @param \AppBundle\Entity\EnvDetails $envDetails
     *
     * @return Environment
     */
    public function addEnvDetails(\AppBundle\Entity\EnvDetails $envDetails)
    {
        $this->envDetails[] = $envDetails;

        return $this;
    }

    /**
     * Remove envDetails
     *
     * @param \AppBundle\Entity\EnvDetails $envDetails
     */
    public function removeEnvDetails(\AppBundle\Entity\EnvDetails $envDetails)
    {
        $this->Environment->removeElement($envDetails);
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
  
   
}

