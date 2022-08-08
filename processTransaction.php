<?php

include_once("connection.php");
if(isset($_POST['send']))
{
    $fname=$_POST['FirstName'];
    $lname=$_POST['LastName'];
    $phone=$_POST['PhoneNumber'];
    $amount=$_POST['Amount'];
    $fees=$_POST['Fees'];
    
    $add = "INSERT INTO wallet(FirstName,LastName,PhoneNumber,Amount,Fees) values ('$fname','$lname', '$phone','$amount','$fees')";
    $connection->exec($add);
}





include 'transaction.php';

?>