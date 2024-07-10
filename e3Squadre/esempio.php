<?php

/*
 * Creare un form in cui l’utente possa inserire i dati di due squadre. In particolare, l’utente inserirà le seguenti informazioni:

nome della squadra;

numero di partite vinte;

numero di partite pareggiate;

numero di partite perse.

Tutti questi campi vanno inseriti obbligatoriamente. In seguito all’inserimento, i dati dovranno essere processati dal server al fine di poter 
indicare il punteggio di entrambe le squadre, facendo attenzione a mostrare prima la squadra che ha un punteggio superiore. Inoltre, se dai dati inseriti
 dall’utente risulta che le due squadre abbiano giocato un numero di partite diverso, indicarlo all’utente tramite una frase.

Realizzare tutto all’interno di un unico file "classifica_squadre.php".
 */


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $squadraA = $_POST['squadra1'];
    $partitev1 = $_POST['s1pv'];
    $partitepareggiate1 = $_POST['s1pp'];
    $partiteperse1 = $_POST['s1p'];
    
    $squadraB = $_POST['squadra2'];
    $partitev2 = $_POST['s2pv'];
    $partitepareggiate2 = $_POST['s2pp'];
    $partiteperse2 = $_POST['s2p'];
}

$puntiA = ($partitev1 * 3) + $partitepareggiate1;

$puntiB = ($partitev2 * 3) + $partitepareggiate2;

$giocateA = $partitev1 + $partitepareggiate1 + $partiteperse1;

$giocateB = $partitev2 + $partitepareggiate2 + $partiteperse2;

echo "<h1>Classifica</h1>" . "<br>";

echo "la squadra '$squadraA' ha $puntiA punti" . "<br>";

echo "la squadra '$squadraB' ha $puntiB punti" . "<br>";

if($giocateA !== $giocateB){
    echo "Le due squadre non hanno la stessa quantit&agrave; di partite giocate" . "<br>";
    echo "$squadraA ha giocato $giocateA partite" . "<br>";
    echo "$squadraB ha giocato $giocateB partite" . "<br>";
}else {
    echo "Entrambe le squadre hanno giocato $giocateA partite giocate";
}