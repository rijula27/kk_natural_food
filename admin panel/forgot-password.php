<?php
require('../dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = $_POST['password'];
    $forgot_password = $_POST['forgot-password'];

    $confirm_password = $_POST['confirm-password'];

        $stmt = $conn->prepare("UPDATE admin_account SET password = ? WHERE password = ?");
        $stmt->bind_param("ss", $forgot_password, $password);


        if($forgot_password == $confirm_password){
            $stmt->execute();
            header("Location: admin.php?message=" . urlencode("Password Upadated succesfully"));
        }else{
            header("Location: admin-forgot-password.php?message=" . urlencode("Password does not match"));
        }
        
 }

 ?>