<?php

namespace Users\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UsersUsersBundle extends Bundle
{
    public function getParent() {
        return'FOSUserBundle';
    }
}
