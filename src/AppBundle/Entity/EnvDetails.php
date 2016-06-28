<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="servertype", type="string", length=20)
     */
    private $servertype;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=50)
     */
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
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
     * Set servertype
     *
     * @param string $servertype
     *
     * @return EnvDetails
     */
    public function setServertype($servertype)
    {
        $this->servertype = $servertype;

        return $this;
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
     * Get servertype
     *
     * @return string
     */
    public function getServertype()
    {
        return $this->servertype;
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
    
    
    
}

