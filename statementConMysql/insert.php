<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "tutorial_mysql";
//oop
$connessione = new mysqli($host, $user, $password, $database);

if($connessione === false){
    die("Errore di connessione: " . $connessione -> connect_error);
}

$sql = "INSERT INTO persone (nome, cognome, email) values (?, ?, ?)";


//CARICAMENTO CON STATEMENT

// if($statement = $connessione->prepare($sql)){
//     $statement->bind_param("sss", $nome, $cognome, $email);
    
//     $nome = "Leopoldo";
//     $cognome = "Mare";
//     $email = "leopoldomare@gmail.com";
//     $statement->execute();
    
//     $nome = "Leonardo";
//     $cognome = "Maresciallo";
//     $email = "leopoasdfasfldomare@gmail.com";
//     $statement->execute();
    
//     echo "Record inseriti con successo";
// }else{
//     echo "Errore: non è possibile eseguire la query:  . $sql. " . $connessione->error;
// }


// SELECT

// $sqlselect = "SELECT * FROM persone WHERE id = 11";

// if($result= $connessione->query($sqlselect)){
//     if($result->num_rows > 0){
//         echo '<table>
//        <tr>
//         <th>id</th>
//          <th>Nome</th>
//          <th>Cognome</th>
//          <th>Email</th>
//        </tr>';
//         while($row =$result->fetch_array()){
//         echo '
//             <tr>
//              <td>' . $row['id'] . '</td>
//              <td>' . $row['nome'] . '</td>
//              <td>' . $row['cognome'] . '</td>
//              <td>' . $row['email'] . '</td>
//             </tr>
//             ';
//         }
//         echo "</table>";
//      }else{
//             echo "Non ci sono righe per questa query";
//         }
//     }else{
//         echo "Errore, impossibile eseguire la query $sqlselect. " . $connessione->error;
//     }


//UPDATE

$sqlUpdate = "UPDATE persone SET email='provandoUpdategmail.com' WHERE id='1'";

if($connessione->query($sqlUpdate) === true){
    echo "Riga aggiornata con successo";
}else{
    echo "Errore nella modifica della riga: " . $connessione->error;
}

$connessione->close();

?>