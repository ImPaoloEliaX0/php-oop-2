<?php

class Carta{

    public $day;
    public $month;
    public $year;
    protected $expiry;
    public $validation = true;
    

    public function __construct($giorno, $mese, $anno){

        $this->day = $giorno;
        $this->month = $mese;
        $this->year = $anno;
        $this->IsValid();
    }

    public function IsValid() {
        $this->expiry = date( $this->month . "-" . $this->day . "-" . $this->year );

    
?>