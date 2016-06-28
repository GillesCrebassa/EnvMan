<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'envdetails_summary' => array (  0 =>   array (    0 => 'envid',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EnvDetailsController::envdetailsListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'envid',    ),    1 =>     array (      0 => 'text',      1 => '/envdetails',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'envdetails_add' => array (  0 =>   array (    0 => 'envid',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EnvDetailsController::envdetailsAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'envid',    ),    2 =>     array (      0 => 'text',      1 => '/envdetails',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EnvironmentController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'environment_summary' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EnvironmentController::environmentsListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/environment/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'environment_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EnvironmentController::environmentAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/environment/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'environment_view' => array (  0 =>   array (    0 => 'envid',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EnvironmentController::environmentViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'envid',    ),    1 =>     array (      0 => 'text',      1 => '/environment/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_summary' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProductController::productsListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProductController::productAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_edit' => array (  0 =>   array (    0 => 'productId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProductController::productEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'productId',    ),    1 =>     array (      0 => 'text',      1 => '/product/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'server_summary' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ServerController::serversListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/server/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'server_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ServerController::ServerAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/server/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
