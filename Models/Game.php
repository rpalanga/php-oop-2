<?php

require_once __DIR__ . '/Traits/Composition.php';

class Game extends Product{

    use Composition;
    

    function __construct($_name,  $_description, $_image, $_price, $_durabilty, $_material)
    {
        parent::__construct($_name,  $_description, $_image, $_price);

        $this->durabilty = $_durabilty;
        $this->material = $_material;
    }
}
