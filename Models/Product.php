<?php

// require './Food.php';
// require './Game.php';
// require './Kennel.php';

class Product{
    public $name;
    public $image;
    public $descritpion;
    public $price;
        
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_description
     * @param  number $_price
     * @return void
     */
    function __construct($_name,  $_description, $_price)
    {
        $this->name = $_name;
        // $this->image = $_image;
        $this->descritpion = $_description;
        $this->price = $_price;
    }

    

}