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

if(isset($_POST['sub']))
{
   print_r($_POST);
   $sql="INSERT INTO user(name,location,nearest_city,district,province,distance,description) VALUES('".$_POST['name']."','".$_POST['location']."','".$_POST['ncity']."','".$_POST['dis']."','".$_POST['prov']."','".$_POST['distance']."','".$_POST['description']."')";
    
    $conn->query($sql);   
  } 
  
 if (isset($_FILES["upload"])) {

    try {
      require "2-connect-db.php";
   
      // (B2) READ IMAGE FILE & INSERT
     $stmt = $pdo->prepare("INSERT INTO `user` (`iname`, `image`) VALUES (?,?)");
    
    $stmt->execute([$_FILES["upload"]["name"], file_get_contents($_FILES["upload"]["tmp_name"])]);
      
      echo "OK";
    } 
    catch (Exception $ex) { echo $ex->getMessage(); }
  }
  
?>
<html>
    <head>
<link rel="stylesheet" href="poststyle.css" type="text/css">
<script language="javascript" type="text/javascript" src="postscript.js">

    /*
    function hide()
    {
        document.getElementById("descrip").style.backgroundImage='none';
    }*/
</script>
    </head>
    <body>
        <div class="help">
           <p> If any problem arises while you are uploading reffal it to us.</p>
            <a href="">HelpCenter</a>
        </div>
        <div class="msg">
            <p>Please be kind</br> to help us to</br> gather & manage</br> your information</br> optimally</p>
        </div>
        <div class="container">
        <form action="" method="POST" enctype="multipart/form-data" name="frm" onSubmit="check();">
            <table>
                <!--<tr>
                    <td><img src="images/ip.png" alt="user image" width="60px" height="60px"></td>
                </tr>-->
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="" placeholder="Enter your name here"></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="url" name="location" value="" placeholder="Link of the location"></td>
                </tr>
                <tr>
                  <td>Nearest city</td> 
                  <td><input type="text" name="ncity" value="" placeholder="Enter the nearest city to the location"></td> 
                </tr>
                <tr>
                    <td>District</td>
                    <td><input type="text" name="dis" value="" placeholder="Enter the district of the location"></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><input type="text" name="prov" value="" placeholder="Enter the province of the location"></td>
                </tr>
                <tr>
                    <td>Distance from the nearest city</td>
                    <td><input type="text" name="distance" value="" placeholder="Enter the distance from the nearest city"></td>
                </tr>
            </table>
        <div>
           <div class="left">
               Description
           </div>
           <div class="right" >
              <textarea name="description" id="descrip" cols="30" rows="10" onCick="hide();"></textarea> 
              <span class="tooltip">briefly describe the issue regarding to your post</span>
           </div> 
        </div>
        <div>
            <div class="imgleft">Add Images</div>
            <div class="imgright"><img src="images/photo add.png" alt="" height="40px" width="40px"><input type="file" name="upload" id="i" accept=".png,.gif,.jpg,.webp" required/></div>
        </div>
        <div class="sub">
        <input type="submit" value="Post It!" name="sub" id="subm"></div>
        </form>
</div>

    </body>
</html>