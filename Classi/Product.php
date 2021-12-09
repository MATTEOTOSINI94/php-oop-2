<?php

class Prodotto {


   public $prodotto=[
        "name"=>"",
        "prezzo"=>"",
        "Descrizione"=>""
   ];

    public function __construct(Array $arr){
       
        $this->setProduct ($arr["name"],$arr["prezzo"],$arr["Descrizione"]);
        $this->getPrezzo();

    }


    protected function setProduct($nome = null,$prezzo = null,$descrizione = null){
        if (isset($nome)) {
            $this->prodotto["name"] = $nome;
        }
        if (isset($prezzo)) {
            $this->prodotto["prezzo"] = $prezzo;
        }
        if (isset($descrizione)) {
            $this->prodotto["Descrizione"] = $descrizione ;
        }
        
    }

    public function getPrezzo(){
        return $this->prodotto["prezzo"];
    }

    
    

}

