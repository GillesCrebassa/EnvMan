<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use AppBundle\Entity\Server;
use AppBundle\Entity\Environment;
/**
 * EnvDetails
 *
 * @ORM\Table(name="env_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnvDetailsRepository")
 * @UniqueEntity("servertype") 
 */
class EnvDetails
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
     * @ORM\ManyToOne(targetEntity="ServerType", inversedBy="envDetails")
     * @ORM\JoinColumn(name="servertype_id", referencedColumnName="id")
     */
    private $servertype;

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
     * @ORM\Column(name="description", type="string", length=255, nullable = true)
     */
    private $description;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Environment", inversedBy="envDetails")
     * @ORM\JoinColumn(name="environment_id", referencedColumnName="id")
     */
    
    private $environment;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Server", inversedBy="envDetails")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     */
    
    private $server;
    
    
    public function __construct()
    {
        $this->environment = new ArrayCollection();
        $this->server = new ArrayCollection();
        $this->servertype = new ArrayCollection();
    }
    
    public function __toString()
    {
           return "{$this->getName()} {$this->environment->getname()}";
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
     * Set servertype
     *
     * @param \AppBundle\Entity\ServerType $servertype
     *
     * @return EnvDetails
     */
    public function setServertype($servertype)
    {
        $this->servertype = $servertype;

        return $this;
    }

    /**
     * Get servertype
     *
     * @return \AppBundle\Entity\ServerType
     */
    public function getServertype()
    {
        return $this->servertype;
    }
    
    
}
