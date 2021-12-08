<?php 

class PaymentMethod{

    private $paymentMethod;
    
    public function __construct($metodoDiPagamento){
        $this->setPaymentMethod($metodoDiPagamento);
        $this->checkPayment();
        
    }

    private function setPaymentMethod($_method){
        $this->paymentMethod = $_method;
    }

    private function checkPayment(){
        $validPayments=["PayPal","Apple Pay","Credit Card"];
        
            if (!in_array($this->paymentMethod,$validPayments,)){
                $this->setPaymentMethod("Undefined");    
            }
        
    }


    
    

   

    
}