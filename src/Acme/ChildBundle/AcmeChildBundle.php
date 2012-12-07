<?php

namespace Acme\ChildBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeChildBundle extends Bundle
{
    public function getParent()
    {
        return 'AcmeParentBundle';
    }
}
