<?php

namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        $name = "testing";
        return $this->render('UsersUsersBundle:Default:index.html.twig');
    }

}
