<?php

trait Cart {

    public $cart = [];
        
    public function addToCart($value){
        $this->cart[]= $value;
        
    }
    public function removeFromCart($value){
        
    
    }
}