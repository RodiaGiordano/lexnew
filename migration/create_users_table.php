<?php  
require_once("db_connection.php");

$sql = "CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    date_birth DATE NOT NULL,
    place_birth VARCHAR(20) NOT NULL,
    c_f VARCHAR(16) NOT NULL
    
);";

if($conn->query($sql) === true){
    echo "tabella creata con successo";
}else{
    echo "errore durante la creazione della tabella" . $conn->error;
}

$conn->close();