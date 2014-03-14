<?php

namespace Rudott\CreateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RudottCreateBundle extends Bundle
{
    public function getParent()
    {
        return 'CmfCreateBundle';
    }
}
