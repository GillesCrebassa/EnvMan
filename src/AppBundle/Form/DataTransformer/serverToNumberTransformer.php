<?php
namespace AppBundle\Form\DataTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use AppBundle\Entity\Server;

class serverToNumberTransformer implements DataTransformerInterface
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }
    /**
     * Transforms an object (issue) to a string (number).
     *
     * @param  server|null $environment
     * @return string
     */
    public function transform($server)
    {
        if (null === $server) {
            return '';
        }

        return $server->getId();
    }

    
    
  /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  string $serverNumber
     * @return server|null
     * @throws TransformationFailedException if object (issue) is not found.
     */
    public function reverseTransform($serverNumber)
    {
        // no issue number? It's optional, so that's ok
        if (!$erverNumber) {
            return;
        }

        $server = $this->manager
            ->getRepository('AppBundle:Server')
            // query for the issue with this id
            ->find($serverNumber)
        ;

        if (null === $server) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An server with number "%s" does not exist!',
                $serverNumber
            ));
        }

        return $server;
    }
}

?>
