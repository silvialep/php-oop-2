<?php

class TypeProduct extends CategoryProduct {
    public $type;

    function __construct(string $name, string $price, string $image, string $description, string $category, string $type) {
        parent::__construct($name, $price, $image, $description, $category);
        $this->type = $type;
    }
}