<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/Usuarios')) {
            // controlador_index
            if ($pathinfo === '/Usuarios/index') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'controlador_index',);
            }

            // controlador_add
            if ($pathinfo === '/Usuarios/addPerfil') {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::addPerfilAction',  '_route' => 'controlador_add',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // helloW
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::helloWord',  '_route' => 'helloW',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
