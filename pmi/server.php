<?php
session_start();

$username = "";
$email = "";

$errors = array();

$db = mysqli_connect('localhost','root','','practices');

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 

    if(empty($username)){
        array_push($errors, "Username required");
    }
    if(empty($email)) {
        array_push($errors, "email required");
    }
    if(empty($password_1)) {
        array_push($errors, "password required");
    }
    if($password_1 != $password_2) {
        array_push($errors, "password didn't matched");
    }

    if(count($errors) == 0){
        $password = md5($password_1);
        $query = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        
        mysqli_query($db, $query);
    }    
}