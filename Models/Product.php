<?php

class Product {
    public $name;
    public $price;
    public $type;
    public $image;
    public $description;

    function __construct(string $name, string $price, string $type, string $image, string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->image = $image;
        $this->description = $description;

    }
}