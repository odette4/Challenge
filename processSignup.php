<?php

include_once("connection.php");
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $passc=$_POST['password_confirm'];
    
    $add = "INSERT INTO wallet(name,email,password,password_confirm) values ('$name','$email', '$pass','$passc')";
    $connection->exec($add);
}





include 'signup.html';

?>