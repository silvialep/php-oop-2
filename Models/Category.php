<?php

class Category {
    protected $category;

    function __construct(string $category) {
        $this->category = $category;

        $this->getIcon();
    }

    // metodo per sostituire l'icona alla categoria
    public function getIcon() {
        if($this->category == 'Cat') {
            $this->category = '<i class="fa-solid fa-cat"></i>';
        }
        if($this->category == 'Dog') {
            $this->category = '<i class="fa-solid fa-dog"></i>';
        }

        return $this->category;
    }
}


// class CategoryProduct extends Product {
//     public $category;

//     function __construct(string $name, string $price, string $image, string $description, string $category) {
//         parent::__construct($name, $price, $image, $description);
//         $this->category = $category;

//         $this->setIcon();
//     }

//     //metodo per sostituire l'icona alla categoria
//     public function setIcon() {
//         if($this->category == 'Cat') {
//             $this->category = '<i class="fa-solid fa-cat"></i>';
//         }
//         if($this->category == 'Dog') {
//             $this->category = '<i class="fa-solid fa-dog"></i>';
//         }
//     }
// }