<?php
/*

 * 
 * Realizzare una prima pagina web (richiesta_soldi.html) che permetta all'utente di inserire la cifra di soldi che intende prelevare al bancomat. 

Inviare, la cifra scelta dall'utente al server (elabora_prelievo.php) che si occuperà di indicare il numero e la tipologia di banconote restituite al cliente della banca. 

Nota bene: Il bancomat soddisfa una richiesta di prelievo di una somma di denaro adottando la seguente strategia:

Emette fin che può banconote da 50 (ossia, emette banconote da 50 fin tanto che il totale non supera la somma richiesta).

Quando ha terminato con le banconote da 50, emette fin che può banconote da 20.

Quando ha terminato con le banconote da 20, emette fin che può banconote da 10.

Ad esempio, se la somma richiesta è 190, verranno emesse 3 banconote da 50 e 2 da 20.  Se la somma richiesta è 180, vengono emesse 3 banconote da 50, una da 20, e una da 10.

In particolare prevedere che la somma richiesta dall'utente abbia le seguenti caratteristiche:

il minimo prelevabile è 10€;

il massimo prelevabile è 250€;

la cifra prelevabile sia un multiplo di 10€.

Se tali caratteristiche non sono soddisfatte il server deve rifiutare la richiesta di prelievo.
 */

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $prelievo = $_POST['prelievo'];
    
}

if($prelievo >250 || $prelievo <10 || $prelievo % 10 !== 0){
    echo "Il prelievo è stato rifiutato, ricorda che il monto non può essere inferiore a 10, non può essere superiore a 250 e deve essere multiplo di 10, riprovaci!!!";
   
}
$banconote50 =0;
$banconote20 =0;
$banconote10 =0;

while($prelievo >= 50){
    $prelievo -=50;
    $banconote50 ++;
}
while($prelievo >= 20){
    $prelievo -=20;
    $banconote20 ++;
    
}
while($prelievo >= 10){
    $prelievo -=10;
    $banconote10 ++;
}

if($banconote50 >0 ){
    if($banconote20>0 && $banconote10 ==0){
        echo "Deve prendere $banconote50 da 50 euro e $banconote20 da 20 euro";
    }else {
        echo "Deve prendere $banconote50 da 50 euro, $banconote20 da 20 euro e $banconote10 da 10 euro";
    }

}elseif($banconote20 >0 && $banconote10 ==0){
    echo "Deve prendere $banconote20 da 20 euro";
}elseif ($banconote20 >0 && $banconote10 >0){
    echo "Deve prendere $banconote20 da 20 euro e $banconote10 da 10 euro";
}else{
    echo "Deve prendere $banconote10 da 10 euro";
}









?>