<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Server
 *
 * @ORM\Table(name="server")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServerRepository")
 * @UniqueEntity("name")  
 */
class Server
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
     * @ORM\Column(name="name", type="string", length=45, unique=true)
     * @Assert\NotBlank() 
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=40, nullable=true)
     */
    private $os;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

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
     * @return Server
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
     * Set ip
     *
     * @param string $ip
     *
     * @return Server
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set os
     *
     * @param string $os
     *
     * @return Server
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Server
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
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
  
    

    /**
     * Add envDetail
     *
     * @param \AppBundle\Entity\EnvDetails $envDetail
     *
     * @return Server
     */
    public function addEnvDetail(\AppBundle\Entity\EnvDetails $envDetail)
    {
        $this->envDetails[] = $envDetail;

        return $this;
    }

    /**
     * Remove envDetail
     *
     * @param \AppBundle\Entity\EnvDetails $envDetail
     */
    public function removeEnvDetail(\AppBundle\Entity\EnvDetails $envDetail)
    {
        $this->envDetails->removeElement($envDetail);
    }
}
