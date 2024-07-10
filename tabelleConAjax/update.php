<?php

require_once ('config.php');

$id = $_POST['id'];
$email = $_POST['email'];

$sql = "UPDATE persone SET email = '$email' WHERE id = $id";

if($connessione->query($sql) === true){
    
    $data = [
        "messaggio" => 'Riga modificata con successo',
        "response" => 1
    ];
    echo json_encode($data);
    
}else{
    $data = [
        "messaggio" => 'Impossibile modificare riga',
        "response" => 0
    ];
    echo json_encode($data);
    
}
?>