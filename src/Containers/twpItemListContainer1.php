<?php

namespace twp\Containers;

use Plenty\Plugin\Templates\Twig;

class twpItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('twp::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
