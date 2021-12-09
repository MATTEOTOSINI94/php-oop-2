<?php 

class PaymentMethod{

    private $paymentMethod;
    private $dataDiScadenza=[
        "mese"=> null,
        "anno"=> null,
    ];

    public function __construct($metodoDiPagamento,$mese,$anno){
        $this->setPaymentMethod($metodoDiPagamento);
        $this->setDataScadenza($mese,$anno);
        $this->checkPayment();
        
    }

    private function setPaymentMethod($_method){
        $this->paymentMethod = $_method;
    }

    public function setDataScadenza($mese,$anno){
        if (is_numeric($mese) && $mese <= 12) {
            $this->dataDiScadenza["mese"]=$mese;
        }
        else{
            $this->dataDiScadenza["mese"]= "Non valido";
        }
        if (is_numeric($anno) && $anno >= 2021) {
            
            $this->dataDiScadenza["anno"]=$anno;
        }else{
            $this->dataDiScadenza["anno"]= "Carta Scaduta";

        }
       
       
    }

    private function checkPayment(){
        $validPayments=["PayPal","Apple Pay","Credit Card"];
        
            if (!in_array($this->paymentMethod,$validPayments,)){
                $this->setPaymentMethod("Undefined");    
            }
        
    }


    
    

   

    
}