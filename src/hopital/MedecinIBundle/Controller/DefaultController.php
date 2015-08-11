<?php

namespace hopital\MedecinIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MedecinIBundle:Default:index.html.twig');
    }
}
