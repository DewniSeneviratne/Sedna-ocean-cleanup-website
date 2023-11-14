<?php
// (A) CONNECT TO DATABASE
require "2-connect-db.php";

// (B) GET IMAGE FROM DATABASE
$name = "se.png";
$id=13;
$stmt = $pdo->prepare("SELECT `image` FROM `user` WHERE `id`=?");
$stmt->execute([$id]);
$img = $stmt->fetch();
$img = $img["image"];


// (C) OUTPUT IMAGE
$ext = pathinfo($name, PATHINFO_EXTENSION);
if ($ext=="jpg") { $ext = "jpeg"; }
header("Content-type: image/" . $ext);
echo $img;

?>

