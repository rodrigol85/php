<?php

//Scrivi un codice PHP per avviare una sessione.

session_start();

//Scrivi un codice PHP per impostare una variabile di sessione con il nome "username" e il valore "mario".

$_SESSION['username'] = 'mario';

$_SESSION['password'] = 'fattigliaffarituoi';

echo  $_SESSION['password'] . "<br>";

//Scrivi un codice PHP per ottenere il valore di una variabile di sessione.


if(isset($_SESSION['password'])){
    $password = $_SESSION['password'];
    $username = $_SESSION['username'];
    echo "L'username di questa sessione è: " . $username. "<br>";
    echo "la password di questa sessione è: " . $password . "<br>";
}else {
    echo "la variabile password non è stata impostata";
}

//Scrivi un codice PHP per verificare se una variabile di sessione esiste.

if(isset($_SESSION['username'])){
    echo "la variabile di username è stata impostata e il suo valore è: " . $_SESSION['username'] . "<br>";
}else{
    echo "Nessun valore di username trovato";
}


//Scrivi un codice PHP per eliminare una variabile di sessione.

unset($_SESSION['username']);

if(isset($_SESSION['username'])){
    echo "la variabile di username è stata impostata e il suo valore è: " . $_SESSION['username'] . "<br>";
}else{
    echo "Nessun valore di username trovato" . "<br>";
}

//Scrivi un codice PHP per distruggere completamente la sessione.

//session_destroy();

if(isset($_SESSION['username'])){
    echo "la variabile di username è stata impostata e il suo valore è: " . $_SESSION['username'] . "<br>";
}else{
    echo "nessuna sessione aperta". "<br>";
}

//Scrivi un codice PHP per contare quante volte un utente ha visitato una pagina utilizzando una variabile di sessione.


if(isset($_SESSION['visite'])){
    $_SESSION['visite']++;
}else {
    $_SESSION['visite'] = 1;
}

echo "Sei entrato in questa pagina {$_SESSION['visite']} volte" . "<br>";


//Scrivi un codice PHP per impostare un timeout di sessione di 30 minuti.

ini_set('session.gc_maxlifetime', 1800); //30*60

session_set_cookie_params(1800);

session_start();

$_SESSION['last_conexion'] = time();

//controllo quanto tempo mi rimane

if(isset($_SESSION['last_conexion'])){
    $timeout = 1800;
    $elapsedtime = time() - $_SESSION['last_conexion'];
    
    if($elapsedtime < $timeout){
        $remainingTime = $timeout - $elapsedtime;
        echo "Tempo rimanente della sessione: " . ($remainingTime/60) ." minuti" . "<br>";
    }else{
        echo "La sessione è scaduta";
    }
}else {
        echo "Nessuna sessione avviata";
    }


    
    
    
    //Scrivi un codice PHP per controllare se una sessione è attiva.
    
    if(session_status() === PHP_SESSION_ACTIVE){
        echo "la sessione è attiva" . "<br>";
    }else {
        echo "La sessione non è attiva";
    }
    
    //Scrivi un codice PHP per rigenerare l'ID della sessione.
    
    session_regenerate_id();

    $newSessionId = session_id();
    
    echo "Nuovo ID di sessione: $newSessionId";













?>