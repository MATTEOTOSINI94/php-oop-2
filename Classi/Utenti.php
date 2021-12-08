<?php 
require_once __DIR__. "/Metodopagamento.php";
require_once __DIR__. "/Product.php";
class Utente  {
    public $nome;
    public $cognome;
    protected $età;
    protected $prodottoAcquistato;
   
    

    public function __construct($_nome,$_cognome,$_età,$_metodoDiPagamento,$arr){
        $this->setName($_nome);
        $this->setSurname($_cognome);
        $this->setEtà($_età);
        $this->metodoDiPagamento = new PaymentMethod($_metodoDiPagamento);
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

    public function getasString(){
        return $this->nome . " ". $this->cognome." anni:  ".$this->età ;
    }


    


    
}