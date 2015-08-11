<?php

namespace Users\UsersBundle\Authentication\Handler;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

/**
 * Description of LogoutHandler
 *
 * @author Hichem
 */
class LogoutHandler implements LogoutSuccessHandlerInterface {

    protected $router;

    public function __construct(RouterInterface $router) {
        $this->router = $router;
    }

    public function onLogoutSuccess(Request $request) {
         $response =  new RedirectResponse( 'login' );
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);
        return $response;
    }

//put your code here
}
