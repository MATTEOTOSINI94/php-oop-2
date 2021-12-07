<?php
require_once __DIR__. "/Utenti.php";

class Under18 extends Utente {

  private $prezzoUnder18;
  


  public function __construct($_nome,$_cognome,$_eta,$_metodoDiPagamento,$arr){
      parent::__construct($_nome,$_cognome,$_eta,$_metodoDiPagamento,$arr);
      $this->getSconto();
      
  
  }
  protected function getSconto(){
    // restituisce il costo del prodotto acquistato!
    $prezzoPieno=parent::calcolaPrezzo();
    if ($this->eta < 18) {
      $this->prezzoUnder18 = $prezzoPieno * 0.4;
    }
    else{
      return $this->prezzoUnder18 ="Non sei un Over60;";
    }
   
   

    
}
 
}