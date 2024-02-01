<?php  

require_once __DIR__ . "/../db_connection.php";

$user_id = $_GET['id'];




    $sql = "SELECT users.id, CONCAT(users.name, ' ', users.last_name) AS full_name, users.c_f, receipts.tax_rate, receipts.id, receipts.date, receipts.amount FROM users JOIN receipts ON users.id = receipts.user_id WHERE users.id = $user_id";
    $result = $conn->query($sql);
    
    $result = $conn->query($sql);
    if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

                $data[] = $row;
            }
        
        }else{
            $error = "nessun risultato";
        }
        
    
   




$conn->close();