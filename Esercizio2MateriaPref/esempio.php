<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $materia = $_POST['materia'];
}


echo "La materia preferita di " . $nome . " " . $cognome . " è: " . $materia;

?>