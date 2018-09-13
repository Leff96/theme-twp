<?php

namespace twp\Containers;

use Plenty\Plugin\Templates\Twig;

class twpItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('twp::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
