<?php

class Prodotto {


   public $prodotto=[
        "Nome"=>"",
        "PrezzoPieno"=>"",
        "Descrizione"=>""
   ];

    public function __construct($arr){
        if (array_key_exists("prodotto",$arr)) {
            $this->setProduct ($arr["prodotto"]["Nome"],$arr["prodotto"]["PrezzoPieno"],$arr["prodotto"]["Descrizione"]);
         }
        $this->getPrezzo();

    }


    protected function setProduct($nome = null,$prezzo = null,$descrizione = null){
        if (isset($nome)) {
            $this->prodotto["Nome"] = $nome;
        }
        if (isset($prezzo)) {
            $this->prodotto["PrezzoPieno"] = $prezzo;
        }
        if (isset($descrizione)) {
            $this->prodotto["Descrizione"] = $descrizione ;
        }
        
    }

    public function getPrezzo(){
        return $this->prodotto["PrezzoPieno"];
    }

    
    

}

