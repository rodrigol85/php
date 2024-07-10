<?php

//Scrivi un codice PHP per convertire un array in una stringa JSON.

$persone = ['nome' => 'Mario','cognome' => 'Rossi', "et&agrave;" => 30, 'email'=>'mariorossi@gmail.com'];

$personeJson = json_encode($persone);

echo $personeJson . "<br>";

//Scrivi un codice PHP per convertire una stringa JSON in un array.

$jsonDati = '{"nome":"Ugo","cognome":"Mancini","email":"ugomancini@gmail.com"}';

$arraydati = json_decode($jsonDati, true);

print_r($arraydati) . "\n";

//Scrivi un codice PHP per leggere un file JSON e convertirlo in un array.

$jsonDato = file_get_contents('esempio.json');

$arraydato = json_decode($jsonDato, true);

print_r($arraydato) . "<br>";

//Scrivi un codice PHP per scrivere un array in un file JSON.

$array2 = ['nome' =>'Mario', 'cognome'=>'Rossi','email'=>'maross@homtail.com'];

$jsonQuartoEsercizio = json_encode($array2);

file_put_contents('newJson.json', $jsonQuartoEsercizio);

$newJson = file_get_contents('newJson.json');

echo $newJson . "<br>";


//Scrivi un codice PHP per aggiungere un nuovo elemento a un array JSON esistente.

$jsonNew = file_get_contents('newJson.json');

$arrayNew = json_decode($jsonNew, true);

$dataDaCaricare = $dataDaCaricare = [
    'persona1' => [
        'nome' => 'Marco',
        'cognome' => 'Polo',
        'email' => 'marpolo@homtail.com',
        'eta' => 25
    ],
    'persona2' => [
        'nome' => 'Giulio',
        'cognome' => 'Cesare',
        'email' => 'gucesa@homtail.com',
        'eta' => 27
    ],
    'persona3' => [
        'nome' => 'Marco',
        'cognome' => 'Antonio',
        'email' => 'marpolantonioo@homtail.com',
        'eta' => 34
    ],
    'persona4' => [
        'nome' => 'Giulio',
        'cognome' => 'Tallavera',
        'email' => 'gusdcesa@homtail.com',
        'eta' => 15
    ]
];

$arrayNew = $dataDaCaricare;

$jsonNew = json_encode($arrayNew);

file_put_contents('newJson.json', $jsonNew);

$perVedere = file_get_contents('newJson.json');

echo 'questi sono i nuovi dati: ' . $perVedere . '<br>';


//Scrivi un codice PHP per ordinare un array JSON per un determinato campo.

$jsonSesto = file_get_contents('newJson.json');

$arraySesto = json_decode($jsonSesto, true);

usort($arraySesto, function ($a, $b) {
    return $a['eta'] - $b['eta'];
});

$jsonSesto = json_encode($arraySesto);

file_put_contents('newJson.json', $jsonSesto);

$perVisualizzare = file_get_contents('newJson.json', $jsonSesto);

echo "I dati del sesto esercizio: " . $perVisualizzare . "<br>";

//Scrivi un codice PHP per filtrare un array JSON in base a un criterio.

$filtroFatto = array_filter($arraySesto, function($item){
    return $item['eta'] <20;
});

$jsonSettimo = json_encode($filtroFatto);

file_put_contents('newJson.json', $jsonSettimo);

$toSeeThem = file_get_contents('newJson.json', $jsonSettimo);

echo "dopo il filtro vedo questo: " . $toSeeThem . "<br>";


//Scrivi un codice PHP per calcolare la somma di un campo in un array JSON.

$adizione = array_reduce($arraySesto, function($carry, $item){
    return $carry + $item['eta'];
}, 0);

echo "la somma delle eta è: $adizione" . "<br>";


//Scrivi un codice PHP per contare il numero di elementi in un array JSON.

$counter = count($arraySesto);

echo "il numero di elementi in questo array è:  $counter" . "<br>";


//Scrivi un codice PHP per rimuovere un elemento da un array JSON in base a un criterio.

$arrayDecimo = array_filter($arraySesto, function($item){
    return $item['eta'] !== 25;
    
});

$jsonDecimo = json_encode($arrayDecimo);

file_put_contents('newJson.json', $jsonDecimo);

$toSee = file_get_contents('newJson.json', $jsonDecimo);

echo "il risultato del decimo esercizio è: $toSee" . "<br>";



    
 
























?>