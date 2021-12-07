<?php
require_once __DIR__. "/Utenti.php";

class Over60 extends Utente {

  private $prezzoOver60;
  


  public function __construct($_nome,$_cognome,$_eta,$_metodoDiPagamento,$arr){
      parent::__construct($_nome,$_cognome,$_eta,$_metodoDiPagamento,$arr);
      $this->getSconto();
      
  
  }
  protected function getSconto(){
    // restituisce il costo del prodotto acquistato!
    $prezzoPieno=parent::calcolaPrezzo();
    if ($this->eta >= 60) {
      return $this->prezzoOver60 = $prezzoPieno * 0.8;
    }
    else{
      return $this->prezzoOver60 ="Non sei un Over60;";
    }
   
   

    
}
 
}