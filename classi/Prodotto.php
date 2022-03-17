<?php

class Prodotto {

    public $productType;
    


    
    public $price;
    public $month;

    public function __construct($productType, $price){

        $this->productType = $productType;
       

        
        $this->price = $price;
        $this->month = date('m');
        $this->SetType($genereProdotto);
    }

    function SetType($productType) {
        if($productType == 'Plays' || $productType == 'Cibopercani' || $productType == 'canec') {
           $this->productType = $productType;
        } else {
           echo " seleziona il prodotto tra quelli disponibili!";
        }
        }
    }

}

?>