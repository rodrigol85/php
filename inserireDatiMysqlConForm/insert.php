

<?php 
//procedurale
//$connessione = mysqli_connect("127.0.0.1", "root", "primer");


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "tutorial_mysql";
//oop
$connessione = new mysqli($host, $user, $password, $database);

if($connessione === false){
    die("Errore di connessione: " . $connessione -> connect_error);
}

$nome = $connessione->real_escape_string($_REQUEST['nome']);
$cognome = $connessione->real_escape_string($_REQUEST['cognome']);
$email = $connessione->real_escape_string($_REQUEST['email']);

$sql = "INSERT INTO persone (nome, cognome, email) values
        ('$nome', '$cognome', '$email')       
";

// $sqltabella = "CREATE TABLE persone(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     nome VARCHAR(30) NOT NULL,
//     cognome VARCHAR(30) NOT NULL,
//     email VARCHAR(70) NOT NULL UNIQUE
// )";

if($connessione->query($sql) == true){
   // echo "Database creato con successo";
    echo "Caricamento di dati avvenuta con successo";
}else{
    echo "Errore creazione database: " . $connessione->error;
}

//$connessione->close();
//pdo
//$connessione = new PDO("mysql:host=localhost; dbname=tutorial_msql", "root", "");


?>