<?php

class Game extends Product{

    public $durabilty;
    public $material;
    

    function __construct($_durabilty, $_material)
    {
        parent::__construct($_name,  $_description, $_price);

        $this->durabilty = $_durabilty;
        $this->material = $_material;
    }
}
