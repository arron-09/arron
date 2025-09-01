<?php
require('../inc/db_config.php');
require('../inc/db_config.php');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$res = $stmt->get_result();

if($row = $res->fetch_assoc()){
    if(password_verify($password, $row['password'])){
        echo "success";
    }else{
        echo "invalid";
    }
}else{
    echo "invalid";
}
?>



