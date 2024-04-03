<?php

class Food extends Product{
    public $expiration;
    public $weight;
    public $flevor;

    function __construct($_expiration, $_weight, $_flevor){

        parent::__construct($_name, $_description, $_price);

        $this->expiration = $_expiration;
        $this->weight = $_weight;
        $this->flevor = $_flevor;
        

    }
}