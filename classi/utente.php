<?php

class utente{
    protected $name;


    
    protected $surname;


    public function __construct($nome, $cognome){




        $this->name = SetName($nome);
        $this->surname = SetSurname($cognome);
    }





    public function SetName($nome) {
        if(is_string($nome)){
        $this->name = $nome;
        }else {
            echo "inserisci lettere."
        }
    }

    public function SetSurname($cognome) {
        if(is_string($cognome)){
        $this->surname = $cognome;
        }else {
            echo "inserisci lettere."
        }
    }
    
}

?>