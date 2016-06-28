<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/envdetails')) {
            // envdetails_summary
            if (preg_match('#^/envdetails/(?P<envid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'envdetails_summary')), array (  '_controller' => 'AppBundle\\Controller\\EnvDetailsController::envdetailsListAction',));
            }

            // envdetails_add
            if (preg_match('#^/envdetails/(?P<envid>[^/]++)/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'envdetails_add')), array (  '_controller' => 'AppBundle\\Controller\\EnvDetailsController::envdetailsAddAction',));
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\EnvironmentController::homeAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/environment')) {
            // environment_summary
            if (rtrim($pathinfo, '/') === '/environment') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'environment_summary');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EnvironmentController::environmentsListAction',  '_route' => 'environment_summary',);
            }

            // environment_add
            if ($pathinfo === '/environment/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\EnvironmentController::environmentAddAction',  '_route' => 'environment_add',);
            }

            // environment_view
            if (0 === strpos($pathinfo, '/environment/view') && preg_match('#^/environment/view/(?P<envid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'environment_view')), array (  '_controller' => 'AppBundle\\Controller\\EnvironmentController::environmentViewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // product_summary
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product_summary');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::productsListAction',  '_route' => 'product_summary',);
            }

            // product_add
            if (rtrim($pathinfo, '/') === '/product/add') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product_add');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::productAction',  '_route' => 'product_add',);
            }

            // product_edit
            if (0 === strpos($pathinfo, '/product/edit') && preg_match('#^/product/edit/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::productEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/server')) {
            // server_summary
            if (rtrim($pathinfo, '/') === '/server') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'server_summary');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServerController::serversListAction',  '_route' => 'server_summary',);
            }

            // server_add
            if ($pathinfo === '/server/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\ServerController::ServerAddAction',  '_route' => 'server_add',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
