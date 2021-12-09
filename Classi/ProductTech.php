<?php

require_once __DIR__ . "Product.php";

class ProductTech extends Prodotto{
    protected $warranty;
    protected $type;
    protected $touchScreen;

    function __construct($arr,$_warranty,$_type){
        parent::__construct($arr);
        $this->setWarranty($_warranty);
        $this->setWarranty($_type);
        
    }

    public function setWarranty($value){
        $this->warranty=$value;
    }
    public function setType($value){
        $this->type=$value;
    }
    public function setTouchScreen($value){
        $this->touchScreen=$value;
    }

}