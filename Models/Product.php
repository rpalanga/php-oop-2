<?php

require './Food.php';
require './Game.php';
require './Kennel.php'

class Product{
    public $name;
    public $image;
    public $descritpion;
    public $price;
    
    function __constrict($_name, $_image, $_description, $_price){
        $this->name = $_name;
        $this->image = $_image;
        $this->descritpion = $_description;
        $this->price = $_price;
    }


}