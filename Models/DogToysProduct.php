<?php

class DogToysProduct extends DogProduct
{
    public $type;

    function __construct(string $name, string $price, string $image, string $description, string $category, string $type)
    {
        parent::__construct($name, $price, $image, $description, $category, $type);
        $this->type = $type;
    }
}
