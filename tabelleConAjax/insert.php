<?php

require_once ('config.php');

$nome = isset($_POST['nome']) ? $connessione->real_escape_string($_POST['nome']) : '';
$cognome = isset($_POST['cognome']) ? $connessione->real_escape_string($_POST['cognome']) : '';
$email = isset($_POST['email']) ? $connessione->real_escape_string($_POST['email']) : '';


$sql = "INSERT INTO persone (nome, cognome, email) VALUES ('$nome', '$cognome', '$email')";

if($connessione->query($sql) === true){
    $data = [
        "messaggio" => 'Riga inserita con successo',
        "response" => 1
    ];
    echo json_encode($data);
}else{
    $data = [
        "messaggio" => $connessione->error,
        "response" => 0
    ];
    echo json_encode($data);
    }

?>