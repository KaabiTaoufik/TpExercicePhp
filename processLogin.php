<?php
session_start();


$email = $_POST['email'];
$password = $_POST['pwd'];

if (isset($email)&&isset($password)) {
    if ($email == 'as@as.as' && $password == "0000") {
        $_SESSION['user']="as";
        header('location:home.php');
    } else {
        $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
        header('location:login.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez vérifier vos credenitals";
    header('location:login.php');
}