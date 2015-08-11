<?php

namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilController extends Controller {

    public function indexAction() {

      
        return $this->render('UsersUsersBundle:Acceuil:Index.html.twig');
    }

  
    }



