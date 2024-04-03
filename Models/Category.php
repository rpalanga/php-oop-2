<?php

class Category{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }

    function getAnimal(){
        return $this->name;
    }
}