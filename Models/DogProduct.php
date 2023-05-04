<?php

class DogProduct extends Product
{
    public $category;

    function __construct(string $name, string $price, string $type, string $image, string $description, string $category)
    {
        parent::__construct($name, $price, $type, $image, $description);
        $this->category = $category;
    }
}
