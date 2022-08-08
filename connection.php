<?php
$servername="localhost";
$username="root";
$password="";
$database="challenge";

try{
    $connection=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo'connection succesfull';
}
catch(PDOException $e){
    
    echo 'connection failed:' .$e->getMessage();
}

?>