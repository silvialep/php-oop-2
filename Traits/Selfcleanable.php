<?php

trait Selfcleanable {
    protected $self = '<i class="fa-solid fa-spray-can-sparkles"></i>';
    

    public function getClean() {
        return $this->self;
    }
}