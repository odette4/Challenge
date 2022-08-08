<?php

include_once("connection.php");
if(isset($_POST['signin']))
{
   
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    
    $add = "INSERT INTO enter(email,password) values ('$email', '$pass')";
    $connection->exec($add);
}


include 'signin.html';

?>