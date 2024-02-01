<?php  

require_once __DIR__ . "/../db_connection.php";


if (isset($_GET['id'], $_POST['number'], $_POST['date'], $_POST['tax_rate'], $_POST['amount']) &&
    !empty($_GET['id']) && !empty($_POST['number']) && !empty($_POST['date']) && !empty($_POST['tax_rate']) && !empty($_POST['amount'])){
    
    $data = $_POST;
    $_user_id = $_GET['id'];

    $stmt = $conn->prepare("INSERT INTO receipts (user_id, number, date, tax_rate, amount, description) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$user_id, $number, $date, $tax_rate, $amount, $description);
    
    $user_id = $_user_id;
    $number = $data['number'];
    $date = $data['date']; 
    $tax_rate = $data['tax_rate'];
    $amount = $data['amount'];
    $description = $data['description'];
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        echo "Ricevuta inserita con successo! a breve verrai reindirizzato alal dashboard";
        header("refresh:2;url=../index.php");
    } else {
        echo "Error 500";
        header("refresh:2;url=../index.php");
    }
}else{
    echo "Error 404";
        header("refresh:2;url=../index.php");
}