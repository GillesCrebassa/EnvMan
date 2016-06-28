<?php
namespace AppBundle\Form\DataTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use AppBundle\Entity\Environment;

class environmentToNumberTransformer implements DataTransformerInterface
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }
    /**
     * Transforms an object (issue) to a string (number).
     *
     * @param  environment|null $environment
     * @return string
     */
    public function transform($environment)
    {
        if (null === $environment) {
            return '';
        }

        return $environment->getId();
    }

    
    
  /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  string $environmentNumber
     * @return environment|null
     * @throws TransformationFailedException if object (issue) is not found.
     */
    public function reverseTransform($environmentNumber)
    {
        // no issue number? It's optional, so that's ok
        if (!$environmentNumber) {
            return;
        }

        $environment = $this->manager
            ->getRepository('AppBundle:Environment')
            // query for the issue with this id
            ->find($environmentNumber)
        ;

        if (null === $environment) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An environment with number "%s" does not exist!',
                $environmentNumber
            ));
        }

        return $environment;
    }
}

?>
