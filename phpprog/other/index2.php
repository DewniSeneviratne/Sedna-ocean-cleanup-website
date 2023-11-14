<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

	
    $dbms = new mysqli("localhost", "root", "", "webassignment", "3306");
    $q = "SELECT * FROM `user`";

    $resultset = $dbms->query($q);

    $n = $resultset->num_rows;

    for ($x = 0; $x < $n; $x++) {

        $r = $resultset->fetch_assoc();

    ?>

        <div>
  
    <img src="" alt="">
            <p>Name :</p> <span> <?php echo $r["name"]; ?> </span>
            <p>Date:  <?php  echo $r["date"]; ?></p>
            <p>Description</p> <span> <?php echo $r["description"]; ?> </span>
            <p>District</p> <span> <?php echo $r["district"]; ?> </span>
            <p>City</p> <span> <?php echo $r["city"]; ?> </span>
            <img src="<?php echo $r["img"];?>" />
        </div>


    <?php
    }

    ?>


</body>

</html>