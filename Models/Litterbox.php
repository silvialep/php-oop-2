<?php

require_once __DIR__ . '/../Traits/Selfcleanable.php';

class Litterbox extends Product {

    use Selfcleanable;

    protected $type;
    protected $sizes;

    function __construct(string $name, string $price, string $image, Category $category, string $description, string $type, array $sizes)
    {
        parent::__construct($name, $price, $image, $category, $description, $category);
        $this->type = $type;
        $this->sizes = $sizes;

        $this->getSizes();
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSizes() {
        if(count($this->sizes) == 3) {
            return implode(' x ', $this->sizes);

        } else {
            throw new Exception("Inserisci tre campi, lunghezza - profondità - altezza");
        }
    }
}
