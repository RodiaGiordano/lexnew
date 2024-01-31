<?php  
require_once("db_connection.php");

$sql = "CREATE TABLE receipts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    number VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    description TEXT NOT NULL,
    amount DECIMAL(7,2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)


    
)";

if($conn->query($sql) === true){
    echo "tabella creata con successo";
}else{
    echo "errore durante la creazione della tabella" . $conn->error;
}

$conn->close();