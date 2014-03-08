<?php

namespace Rudott\PagePartBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RudottPagePartBundle extends Bundle
{
    public function getParent()
    {
        return 'KunstmaanPagePartBundle';
    }
}
