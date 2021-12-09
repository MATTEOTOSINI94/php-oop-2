<?php
require_once "./data/utenti.php";
require_once "./data/prodotti.php";
require_once "Classi/Metodopagamento.php";
require_once "Classi/Utenti.php";
require_once "Classi/Over60.php";
require_once "Classi/Under18.php";


foreach ($utenti as $utente) {
   
    foreach($prodotti as $prodotto){
        $prod = $prodotto;
    }
    try {
        $utente0 = new Utente ($utente["name"],$utente["lastname"],$utente["età"],$utente["mail"],$utente["paymethod"],rand(1,12),rand(2019,2030),$prod);
        var_dump($utente0);
    } catch (Exception $e) {
      
        echo "Impossibile generare l'istanza per l'utente " . $utente["name"] . " " .$utente["lastname"] ." ";
        echo $e -> getMessage() ."<br>";
    }

   
   

}

// $utente1 = new Utente(
//     "Matteo","Tosini",20,
//     "Apple Pay",
//     10,
//     2021,
//     ["prodotto"=>
//     [
//     "Nome"=> "Iphone",
//     "PrezzoPieno" => 60,
//     "Descrizione"=>"Il modello di seconda generazione monta il processore Apple A13 Bionic, lo stesso installato nei modelli di punta iPhone 11, 11 Pro e 11 Pro Max anche se, a differenza di questi, il SE è dotato di 3 GB di RAM. Le prestazioni rimangono pressoché identiche."
//     ]
//     ]
// );
// $utente2 = new Over60(
//     "Matteo"
//     ,"Tosini",60,"Apple Pay",
//     8,2030,
//     ["prodotto"=>
//     [
//     "Nome"=> "Iphone",
//     "PrezzoPieno" => 60,
//     "Descrizione"=>"Il modello di seconda generazione monta il processore Apple A13 Bionic, lo stesso installato nei modelli di punta iPhone 11, 11 Pro e 11 Pro Max anche se, a differenza di questi, il SE è dotato di 3 GB di RAM. Le prestazioni rimangono pressoché identiche."

//     ]
//     ]
// );
// $utente3 = new Under18(
//     "Matteo","Tosini",17
//     ,"Apple Pay",
//     3,2010,
//     ["prodotto"=>
//     [
//     "Nome"=> "Iphone",
//     "PrezzoPieno" => 60,
//     "Descrizione"=>"Il modello di seconda generazione monta il processore Apple A13 Bionic, lo stesso installato nei modelli di punta iPhone 11, 11 Pro e 11 Pro Max anche se, a differenza di questi, il SE è dotato di 3 GB di RAM. Le prestazioni rimangono pressoché identiche."
//     ]
//     ]
// );



// var_dump($utente1);
// echo $utente1-> getasString();
// var_dump($utente2);
// echo $utente2-> getasString();
// var_dump($utente3);
// echo $utente3-> getasString();



// var_dump($utente1->calcolaPrezzo());
// var_dump($utente2->calcolaPrezzo());



