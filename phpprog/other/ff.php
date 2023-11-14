<?php

$host="localhost" ;
$username="root";
$password="";

try{
    $conn =new PDO("mysql:host=$host;dbname=sedna",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);      
} 

catch(PDOException $e){
    echo "connection failed: ". $e->getMessage();        
}
$name=$conn->prepare("SELECT name FROM `user` WHERE `id` = 14");

echo $name;

?>