<?php

// require './Food.php';
// require './Game.php';
// require './Kennel.php';

class Product{
    public $name;
    public $image;
    public $descritpion;
    public $price;
    public $category;
        
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_description
     * @param  float $_price
     * @return void
     */
    function __construct($_name,  $_description, $_image, $_price)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->descritpion = $_description;

        if(is_numeric($_price)){
            
            $this->price = $_price;

        }else{
            
            throw new Exception("Il prezzo inserito non è un numero");
        }
    }

    

}