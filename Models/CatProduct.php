<?php

class CatProduct extends Product {
    public $category;

    function __construct(string $name, string $price, string $image, string $description, string $category) {
        parent::__construct($name, $price, $image, $description);
        $this->category = $category;

        $this->setIcon();
    }

    //metodo per sostituire l'icona alla categoria
    public function setIcon() {
        $this->category = '<i class="fa-solid fa-cat"></i>';
    }
}