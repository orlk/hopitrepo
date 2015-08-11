<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FactureBundle\form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * Description of LoginForm
 *
 * @author abdou
 */
class LoginForm extends AbstractType {

//put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder->add('login')->add('password','password')->add('Login','submit');
    }

    public function getName() {
        return 'login';
    }

}
