<?php
require 'mysql.php';
session_start(); 

if (isset($_POST['submit'])) {

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['error'] = "Username or Password is invalid";
        header("Location: index.php");
    }
    else{

        $username = $_POST['username'];
        $password = $_POST['password'];
        $userType ='';

        $query = "SELECT userId, userPwd, userType from tbl_User where userId=? AND userPwd=?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password,$userType);
        $stmt->store_result();
            if($stmt->fetch()) {
                $_SESSION['login_user'] = $username; 
                $_SESSION['userType'] = $userType;
                header("location: home.php"); 
            }
            else{

                $_SESSION['error']= "Invalid Password";
                header("location: index.php");
            }
    }
mysqli_close($conn);
}
?>