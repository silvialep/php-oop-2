<?php

class Product {
    public $name;
    public $price;
    public $image;
    public $description;

    function __construct(string $name, string $price, string $image, string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;

    }

    
}