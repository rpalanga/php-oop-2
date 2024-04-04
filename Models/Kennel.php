<?php

require_once __DIR__ . '/Traits/Composition.php';

class Kennel extends Product{

    use Composition;

    public $weight;
    

    function __construct($_name,  $_description, $_image, $_price, $_weight, $_durabilty, $_material)
    {
        parent::__construct($_name,  $_description, $_image, $_price);
        
        $this->weight = $_weight;
        $this->durabilty = $_durabilty;
        $this->material = $_material;

        
    }


}