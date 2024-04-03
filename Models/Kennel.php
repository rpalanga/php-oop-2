<?php

class Kennel extends Product{

    public $weight;
    public $durabilty;
    public $material;

    function __construct($_durabilty, $_material, $_weight)
    {
        parent::__construct($_name,  $_description, $_price);
        
        $this->weight = $_weight;
        $this->durabilty = $_durabilty;
        $this->material = $_material;

        
    }


}