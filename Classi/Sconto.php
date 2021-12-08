<?php
require_once __DIR__. "/Utenti.php";

class Over60 extends Utente {

  private $prezzoOver60;
  


  public function __construct($_nome,$_cognome,$_età,$_metodoDiPagamento,$arr){
      parent::__construct($_nome,$_cognome,$_età,$_metodoDiPagamento,$arr);
      $this->getSconto();
      
  
  }
  protected function getSconto(){
    // restituisce il costo del prodotto acquistato!
    $prezzoPieno=parent::calcolaPrezzo();
    if ($this->età >= 60) {
      return $this->prezzoOver60 = $prezzoPieno * 0.8;
    }
    else{
      return $this->prezzoOver60 ="Non sei un Over60;";
    }
}

public function getasString(){
  return  parent::getasString() . " Prezzo Scontato " . $this->prezzoOver60;
  
}


 
}