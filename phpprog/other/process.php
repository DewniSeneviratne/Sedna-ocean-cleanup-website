<?php

$name =  $_POST["n"];
$des = $_POST["des"];
$di = $_POST["di"];
$city = $_POST["c"];
echo name;
// $image = $_FILES["img"]["name"];
// $image = $_FILES["img"]["type"];
// $image = $_FILES["img"]["size"];
$image = $_FILES["img"]["tmp_name"];


$fileName = uniqid().".png"; // image name

$path = "image//".$fileName;

move_uploaded_file($image, $path);



$d =  new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$dbms = new mysqli("localhost","root","","webassignment","3306");
$q = "INSERT INTO `user`(`name`,`description`,`district`,`city`,`date`,`img`)VALUES('".$name."','".$des."','".$di."','".$city."','".$date."','".$path."')";
$dbms->query($q);

?>