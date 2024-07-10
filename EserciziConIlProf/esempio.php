<?php
/*
 * Creare un form che consente all’utente di inserire il nome di un prodotto, il prezzo del prodotto ed il numero di unità che si intende acquistare di tale prodotto.
Tale form deve inviare i dati al server con metodo get. Sarà compito del server calcolare e mostrare a schermo il costo totale per acquistare le unità richieste di quel prodotto.
 */



if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET["nome"];
    $prezzo = $_GET["prezzo"];
    $quantita = $_GET["quantita"];
    
    $totale = $prezzo * $quantita;
    
    echo "Il costo totale per $quantita unità di $nome è: $totale €";
}










?>