<?php

namespace twp\Containers;

use Plenty\Plugin\Templates\Twig;

class twpItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('twp::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
