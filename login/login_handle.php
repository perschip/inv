<?php

require('../global/database/dbconnect.php');

error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST["email"]) and isset($_POST["pass"])){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, SHA1($_POST['pass'])); 

        $query = "SELECT * FROM users WHERE user_email = '$email' and user_password = '$password'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if ($count == 1) {

            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['user_id'];
    
            header("Location: ../dashboard/index.php");
        } else {

            $_SESSION['loggedin'] = false;
            $_SESSION ['id'] = 0;
            header("Location: index.php?error=1");
        }

    }

}
?>