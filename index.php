<?php


require_once __DIR__ . '/classi/utente.php';

require_once __DIR__ . '/classi/Utentev.php';

require_once __DIR__ . '/classi/Prodotto.php';

require_once __DIR__ . '/classi/Carta.php';



$Utente1 = new utente('Giordano', 'Campo');

$Utente2 = new Utentev ('Giacomo', 'Gioacchino', 'GiacomoGioacchino', 'MiaPassword');

//creazione dei prodotti

$canec = new prodotti('canec', '50', date('m'));

$Cibopercani = new prodotti('Cibopercani', '20', date('m'));

//carta 


$carta = new Carta(08-07-2029);

var_dump($Utente1);

var_dump($Utente2);

var_dump($canec);
var_dump($Cibopercani);

var_dump($Carta);





?>