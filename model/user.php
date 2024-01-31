<?php 
require_once __DIR__ . "/../db_connection.php";

$searchName = str_replace(' ', '', $_GET['name']);



if(empty($searchName)){

    header("Location: ../index.php");
    exit();
}
    $sql = "SELECT id, name, last_name FROM users WHERE CONCAT( name, last_name) LIKE '%$searchName%'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

                $data[] = $row;
            }
            
        }else{
            $error = "Nessun risultato";
        }
        
    




$conn->close();