<?php
$host="localhost" ;
$username="root";
$password="";
try{
    $conn =new PDO("mysql:host=$host;dbname=web",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} 
catch(PDOException $e){
    echo "connection failed: ". $e->getMessage();
        
}
if(isset($_POST['sub']))
{
    print_r($_POST);
    $sql="INSERT INTO sednauser(name,description,district) VALUES('".$_POST['name']."','".$_POST['des']."','".$_POST['dis']."')";
    $conn->query($sql);
}
?>
<html>
    <head></head>
    <body>
        <form action="" method="POST" >
            <table>
                <tr>
                    <td>
                    Name:
                    </td>
                    <td>
                        <input type="text" name="name" value="">
                    </td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="des" cols="30" rows="10" value=""></textarea></td>
            </tr>
            <tr><td>District</td>
        <td><input type="text" name="dis" value=""></td></tr>
        
            </table>
            <input type="submit" value="post" name="sub">
        </form>
    </body>
</html>
