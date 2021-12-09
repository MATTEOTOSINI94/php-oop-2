<?php 
require_once __DIR__. "/Metodopagamento.php";
require_once __DIR__. "/Product.php";
class Utente  {
    public $nome;
    public $cognome;
    protected $età;
    protected $email;
    protected $prodottoAcquistato;
   
    

    public function __construct($_nome,$_cognome,$_età,$_email,$_metodoDiPagamento,$mese,$anno,$arr){
        $this->setName($_nome);
        $this->setSurname($_cognome);
        $this->setEtà($_età);
        $this->setEmail($_email);
        $this->metodoDiPagamento = new PaymentMethod($_metodoDiPagamento,$mese,$anno);
        $this->prodottoAcquistato = new Prodotto($arr);
        $this-> calcolaPrezzo();

    }
    public function calcolaPrezzo(){
        // restituisce il costo del prodotto acquistato!
        return $this->prodottoAcquistato->getPrezzo();

    }

    protected function setName($name){
        $this->nome = $name;
    }
    protected function setSurname($surname){
        $this->cognome = $surname;
    }
    protected function setEtà($età){
        $this->età= $età;
    }
    protected function setEmail($mail){
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
           throw new Exception("Email Non valida");
           
          }
          else{
            $this->email= $mail;
          }

        
    }



    public function getasString(){
        return $this->nome . " ". $this->cognome." anni:  ".$this->età ;
    }


    


    
}