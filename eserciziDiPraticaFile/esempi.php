<?php

//Scrivi un codice PHP per aprire un file e leggerne il contenuto.

$nomeFile = 'file.txt';

$file = fopen($nomeFile, 'r');

$contenuto = fread($file, filesize($nomeFile));

fclose($file);

echo $contenuto . "\n";

//Scrivi un codice PHP per creare un nuovo file e scrivere del testo al suo interno.

$fileName = 'fileToWrite.txt';

$fileEsercizio2 = fopen($fileName, 'w');

$textToInsert = "Con Questa squadra non andremmo di nuovo al mondiale";

fwrite($fileEsercizio2, $textToInsert);

$file2 = fopen($fileName,'r');
fclose($fileEsercizio2);

$contenuto = fread($file2, filesize($fileName));

echo "Il file $fileName è stato compilato con successo!\n" . "<br>";

echo $contenuto;


//Scrivi un codice PHP per verificare se un file esiste.

if(file_exists($nomeFile)){
    echo "il file cercato esite" . "<br>";
}else {
    echo "Nessun file trovato con questo nome" . $nomeFile . "<br>";
}


//Scrivi un codice PHP per copiare il contenuto di un file in un altro file.

if(copy($nomeFile, $fileName)){
    echo "Il file è stato copiado con successo!" . "<br>";
    
}else {
    echo "Si è verificato un errore durante l'operazione";
}

echo $contenuto;

//Scrivi un codice PHP per rinominare un file

$fileNuovo = "fileAggiornato.txt";

if(rename($fileName, $fileNuovo)){
    echo "Il nome del file è stato aggiornato con successo" . "<br>";
}else {
    echo "Si è verificato un errore durante l'operazione di cambio nome";
}

$file2 = fopen($fileNuovo,'r');
$contenuto = fread($file2, filesize($fileNuovo));

echo "Il nuovo file è aggiornato: " . $contenuto . "<br>";


//Scrivi un codice PHP per eliminare un file.

if(unlink($fileNuovo)){
    echo "Il file è stato cancellato con successo";
}else {
    echo "il file non è stato ancora cancellato, riprova!";
}

//Scrivi un codice PHP per ottenere le informazioni su un file, come la dimensione e la data di modifica.

$infoFile = stat($nomeFile);
$dimensione = $infoFile['size'];

$dataDiAggiornamento = date('d-m-Y H:i', $infoFile['mtime']);

if(file_exists($fileNuovo)){
    
    
    $infoFile = stat($nomeFile);
    $dimensione = $infoFile['size'];
    echo "operazione fatta";
}else{
    echo "il file non esiste piu";
}
echo "La dimensione del file è: $dimensione byte" . "<br>";

echo "la data dell'ultima modifica: $dataDiAggiornamento" . "<br>";


//Scrivi un codice PHP per leggere il contenuto di una directory e elencare tutti i file al suo interno.

$folder = '../eserciziDiPratica';

$files = scandir($folder);

echo "I files sono: " . "<br>";
foreach ($files as $file){
    if(is_file($folder . '/' . $file)){
        echo  $file . "<br>" ;
    }
    

}


//Scrivi un codice PHP per creare una nuova directory.

$phpfolder = 'phpfolder1';

if(mkdir($phpfolder)){
    echo "la cartella è stata creata con successo" . "<br>";
}else{

echo "Si è verificato un errore alla creazione della cartella";

}

//Scrivi un codice PHP per eliminare una directory e tutti i file al suo interno.

if(rmdir($phpfolder)){
    echo "la cartella $phpfolder è stata cancellata con successo";
}else {
    echo "Errore nella cancellazione della cartella";
}






























?>