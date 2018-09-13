<?php

namespace twp\Containers;

use Plenty\Plugin\Templates\Twig;

class twpContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('twp::Stylesheet');
    }
}
