<?php

trait Selfcleanable {
    protected $self = '<i class="fa-solid fa-spray-can-sparkles"></i>';
    

    public function getClean() {
        if($this->isCleanable == 'true') {
            return $this->self;
        } 
        if($this->isCleanable == 'false') {
            return '';
        } else {
            throw new Exception("Inserisci solo valori true o false");
        }
    }
}