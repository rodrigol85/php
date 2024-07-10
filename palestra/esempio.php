<?php
/*
Creare un form dove l’utente possa inserire i seguenti dati:

il nome;

l’età. Per gli under 18 o gli over 64 il prezzo mensile è di 35€. Per tutti gli altri il
 prezzo mensile è di 45€.

la frequenza di pagamento che può essere mensile, bimestrale, trimestrale o annuale. 
In base alla frequenza l’utente avrà diritto ad uno sconto */
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $eta = $_POST['eta'];
    $pagamento = $_POST['pagamento'];
   
}

if($eta < 18 || $eta > 64){
    if($pagamento == "mensile"){
        echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
        (12*35) . " euro";
    }elseif($pagamento == "bimestrale"){
        echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
        (12*35)*0.90 . " euro";
    }elseif($pagamento == "trimestrale"){
        echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
        (12*35)*0.85 . " euro";
    }else{
        echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
        (12*35)*0.80 . " euro";
    }
}elseif($pagamento == "mensile"){
    echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
    (12*45) . " euro";
}elseif($pagamento == "bimestrale"){
    echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
    (12*45)*0.90 . " euro";
}elseif($pagamento == "trimestrale"){
    echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
    (12*45)*0.85 . " euro";
}else{
    echo "l'utente $nome di $eta anni con metodo di pagamento $pagamento, l'importo totale per un anno è: " .
    (12*45)*0.80 . " euro";
}









?>