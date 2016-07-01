<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Server;
use AppBundle\Entity\Environment;
use AppBundle\Entity\ProductParameter;

/**
 * ResultAudit
 *
 * @ORM\Table(name="result_audit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResultAuditRepository")
 */
class ResultAudit
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
     * @ORM\Column(name="result", type="string", length=255)
     */
    private $result;

    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Environment", inversedBy="resultAudit")
     * @ORM\JoinColumn(name="environment_id", referencedColumnName="id")
     */
    
    private $environment;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Server", inversedBy="resultAudit")
     * @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     */
    
    private $server;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="ProductParameter", inversedBy="resultAudit")
     * @ORM\JoinColumn(name="productparameter_id", referencedColumnName="id")
     */
    
    private $parameter;

    
    public function __construct()
    {
        $this->environment = new ArrayCollection();
        $this->server = new ArrayCollection();
        $this->parameter = new ArrayCollection();
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
     * Set result
     *
     * @param string $result
     *
     * @return ResultAudit
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
    /**
     * Set environment
     *
     * @param \AppBundle\Entity\Environment $environment
     *
     * @return resultAudit
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
     * @return resultAudit
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
     * Set productparameter
     *
     * @param \AppBundle\Entity\ProductParameter $parameter
     *
     * @return resultAudit
     */
    public function setParameter(\AppBundle\Entity\ProductParameter $parameter = null)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Get productparameter
     *
     * @return \AppBundle\Entity\ProductParameter
     */
    public function getParameter()
    {
        return $this->parameter;
    }
}

