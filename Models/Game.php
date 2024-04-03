<?php

class Game extends Product{

    public $durabilty;
    public $material;
    

    function __construct($_name,  $_description, $_image, $_price, $_durabilty, $_material)
    {
        parent::__construct($_name,  $_description, $_image, $_price);

        $this->durabilty = $_durabilty;
        $this->material = $_material;
    }
}
