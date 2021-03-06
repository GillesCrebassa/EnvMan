<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use AppBundle\Entity\Server;
use AppBundle\Entity\ServerCategory;
use AppBundle\Entity\Environment;
use AppBundle\Entity\Audit;
/**
 * EnvDetails
 *
 * @ORM\Table(name="env_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnvDetailsRepository")
 */
class EnvDetails
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ServerCategory", inversedBy="envDetails")
     * @ORM\JoinColumn(name="servercategory_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     */
    private $servercategory;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=50)
     * @Assert\NotBlank() 
     */
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="parameter", type="string", length=50)
     */
    private $parameter;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable = true)
     */
    private $description;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Environment", inversedBy="envDetails")
     * @ORM\JoinColumn(name="environment_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     */
    
    private $environment;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Server", inversedBy="envDetails")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     * @Assert\NotBlank() 
     */
    
    private $server;
    
    
    public function __construct()
    {
        $this->environment = new ArrayCollection();
        $this->server = new ArrayCollection();
        $this->servercategory = new ArrayCollection();
    }
    
    public function __toString()
    {
           return "{$this->getId()} {$this->environment->getname()} {$this->servercategory->getname()}";
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
     * Set id
     *
     * @param string $id
     *
     * @return EnvDetails
     */
    /*
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    */
    
    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return EnvDetails
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set user
     *
     * @param string $parameter
     *
     * @return EnvDetails
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }
    
    /**
     * Set description
     *
     * @param string $description
     *
     * @return EnvDetails
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
     * Set environment
     *
     * @param \AppBundle\Entity\Environment $environment
     *
     * @return envDetails
     */
    public function setEnvironment(\AppBundle\Entity\Environment $environment = null)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment
     *
     * @return \AppBundle\Entity\Environment
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set server
     *
     * @param \AppBundle\Entity\Server $server
     *
     * @return envDetails
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
     *
     * @return envDetails
     */
    /**
     * Set servercategory
     *
     * @param \AppBundle\Entity\ServerCategory $servercategory
     *
     * @return EnvDetails
     */
    public function setServerCategory($servercategory)
    {
        $this->servercategory = $servercategory;

        return $this;
    }

    /**
     * Get servercategory
     *
     * @return \AppBundle\Entity\ServerCategory
     */
    public function getServercategory()
    {
        return $this->servercategory;
    }
    
    
}
