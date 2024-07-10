<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $estensioni_permesse = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" =>"image/gif", "png" =>"image/png");
        $nome_file = $_FILES["photo"]["name"];
        $tipo_file = $_FILES["photo"]["type"];
        $dimensione_file = $_FILES["photo"]["size"];
        
        //si verifica l'estensione
        $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);
        if(!array_key_exists($estensione, $estensioni_permesse)) die ("Errore: Seleziona un fomato valido");
        
        //si verifica la grandezza massima di 5mb
        $dimensione_massima = 5 * 1024 * 1024;
        if($dimensione_file > $dimensione_massima) die("Errore: La grandezza è superiore al limite di 5mb");
        
        //si verifica il tipo di MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            //controllare se il file esiste già
            if(file_exists("upload/" . $nome_file)){
                echo $nome_file . "esiste già";
            }else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "C:\xampp\htdocs\primer\upload" . $nome_file);
                echo "il tuo file è stato caricato con successo.";
            }
        }else{
            echo "Errore: C'è stato un problema con il caricamento del tuo file, riprova.";
        }
       
    }else{
        echo "Errore: " . $_FILES["photo"]["error"];
        
    }
}

setcookie("username", "luca Rossi", time()+60*60*24*30);
setcookie("password", "lucasrosssis", time()+60*60*24*30);

?>