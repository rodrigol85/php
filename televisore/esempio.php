<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $marca = $_POST['marca'];
    $modello = $_POST['modello'];
    $porteHDMI = $_POST['porte'];
    $refrex = $_POST['refresh'];
    $schermo = $_POST['schermo'];
}

echo "<h1>Consiglio di acquisto</h1>". "<br>";



if($porteHDMI < 2){
    echo "Si consiglia che il minimo di porte siano 2" . "<br>";
}else {
    echo "Porte HDMI : OK". "<br>";
}
 
if($refrex < 50){
    echo "Si consiglia che il refresh rate non sia più basso di 50HZ". "<br>";
}else {
    echo "Refresh rate: OK". "<br>";
}

if($schermo == "HD Ready" || $schermo == "Full HD"){
    echo "Si consiglia una risoluzione Ultra HD oppure 4k". "<br>";
}else {
    echo "Refresh rate: OK". "<br>";
}






?>