<?php

namespace Users\UsersBundle\Authentication\Handler;
use Symfony\Component\Routing\RouterInterface ;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface {

    protected $router;
    protected $security;
    protected $translator;

    public function __construct(RouterInterface $router, SecurityContext $security, $translator) {
        $this->router = $router;
        $this->security = $security;
        $this->translator = $translator;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {

        $response = new RedirectResponse($referer_url = $request->headers->get('referer'));
        return $response;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
     $redirection = new RedirectResponse($this->router->generate('users_users_homepage'));
       
        return $redirection;
    }

}
