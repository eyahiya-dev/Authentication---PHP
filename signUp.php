<?php
session_start();

// store data using session
$_SESSION['userName'] = $_POST['userName'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

// now using session data with variables
$name = $_SESSION['userName'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

if($name && $email && $password) {
    $_SESSION['signUpMessage'] = "Your Sign Up Process is Successfully Complete. Let's Sign In";
    header('Location:login.php');
}else{
    $_SESSION['signFailMessage'] = "Please fill all the credentials first";
    header('Location:index.php');
}




