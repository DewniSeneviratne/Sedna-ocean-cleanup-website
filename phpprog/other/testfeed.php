<?php
 $db = mysqli_connect("localhost", "root", "", "feed"); 
 $msg = "";
 if (isset($_POST['sub'])) { 
    $image = $_FILES['image']['name'];
    $name= mysqli_real_escape_string($db, $_POST['name']);
    $location= mysqli_real_escape_string($db, $_POST['location']);
    $ncity= mysqli_real_escape_string($db, $_POST['ncity']);
    $dis= mysqli_real_escape_string($db, $_POST['dis']);
    $prov= mysqli_real_escape_string($db, $_POST['prov']);
    $distance= mysqli_real_escape_string($db, $_POST['distance']);
    $description= mysqli_real_escape_string($db, $_POST['description']);

    $target = "image/".basename($image);
     $sql = "INSERT INTO user (name, location, nearest_city, district, province, distance, description, image) VALUES ('$name', '$location', '$ncity', '$dis', '$prov', '$distance', '$description', '$image' )"; 
     mysqli_query($db, $sql);
     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
    { $msg = "Image uploaded successfully";
    }
    else{ $msg = "Failed to upload image"; } } 
    $result = mysqli_query($db, "SELECT * FROM user");
?>


<html>
    <head>
       
        <title>Feed</title>
        <style>
@font-face{
font-family:"Mont ExtraLight DEMO";
font-family:roboto;
font-family:raleway;

}
        </style>
        <link rel="stylesheet"
        type="text/css"
        href="feedsedn.css">
        


<!- font roboto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

<!- font Raleway -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="menu">
            <a href="webweb.html">HOME</a>
            <a href="feedsedna.html">FEED</a>
            <a href="contribution.html">CONTRIBUTION</a>
            <a href="profile.html">PROFILE</a>
            <a href="sign up.html">LOGIN</a>
            <span class="logo">
            <a id="tw" href="https://twitter.com/Sedna2022"><img src="tw.gif" height="35px" width="37px"></a>
            <a id="fb" href="https://www.facebook.com/profile.php?id=100077396950173"><img src="fb1.png" height="35px" width="35px"></a>
            <a id="ig" href="https://instagram.com/sedn_a_?utm_medium=copy_link"><img src="insta.png" height="40px" width="48px"></a>
            </span>
            </div>

            <div class="bgimg">
                
            </div>

            <div class="container">
                <span class="text1"> Post<br>Share<br>Act<br></span>
                <span class="text2"> Here's the space to <br>create a post about anywhere<br>you see that the ocean is polluted.<br>Post images with a brief<br>description and don't forget to<br>mention the location.<br></span>
               <span class="text3">Feed</span>
            </div>
            
           
                <input type="text" name="search" placeholder="Search for location">
            


            <div class="container3">
               
                <span class="text5"> ACTIVITY</span>
            </div>

            <div class="container4">
                <span class="text6">  POSTS</span>
            </div>
            <div class="container5">
                <span class="text7"> SAVED</span>
            </div>

            <div class="container6">
                <span class="text8"> HELP</span>
            </div>

            <div class="addbutton">
               <a  href="http://localhost/phpprog/post.php"><img src="plus.png" height="35px" width="37px"></a></a>
            </div>

            <div class="help">
           <p> If any problem arises while you are uploading reffal it to us.</p>
            <a href="">HelpCenter</a>
        </div>
        <div class="msg">
            <p>Please be kind</br> to help us to</br> gather & manage</br> your information</br> optimally</p>
        </div>
        <div class="container">
        <form action="testfeed.php" method="POST" enctype="multipart/form-data" name="frm" onSubmit="check();">
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
            <div class="imgright"><img src="images/photo add.png" alt="" height="40px" width="40px"><input type="file" name="image" id="i" accept=".png,.gif,.jpg,.webp" required/></div>
        </div>
        <div class="sub">
        <input type="submit" value="Post It!" name="sub" id="subm"></div>
        </form>
</div>

            <?php
             while($row = mysqli_fetch_array($result)) {
                
           echo" <div class='box1'>"; 
                echo"<div class='p1'>";
                echo "<img src='image/".$row['image']."' height='450px' width='1000px'>"; 
                    echo"<div class='wbar'>";
                        echo"<span class='features'>";
                        echo"<a id='fav' href=''><img src='fav.PNG' height='35px' width='37px'></a>";
                        echo"<a id='com' href=''><img src='com.PNG' height='35px' width='37px'></a>";
                        echo"<a id='tag' href=''><img src='tag.PNG' height='35px' width='37px'></a>";
                        echo"<a id='share' href=''><img src='share.PNG' height='35px' width='37px'></a>";
                    echo"</span>
                    </div>

                </div>";
               echo" <div class='dp'>";

                echo"</div>";
                echo"<div class='desc'>";
                    echo"<p style='color:white;'>description</p>
                </div>
			<div class='table'>";
     $sql = "INSERT INTO user (name, location, nearest_city, district, province, distance, description, image) VALUES ('$name', '$location', '$ncity', '$dis', '$prov', '$distance', '$description', '$image' )"; 
            echo"<p>Nearest City :" .$row['nearest_city']."</p>";
			echo"<p>District : ".$row['district']."</p>";
				echo"<p>Province : ".$row['province']."</p>";
				echo"<p>Distance from the nearest city : ".$row['distance']."</p>";

			echo"</div>";

			echo"<div class='loc'>";
				echo"<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15846.074897881575!2d80.04230414999999!3d6.8282313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24ddc33c975bd%3A0xad2df12267f8f497!2sFaculty%20of%20Technology%2C%20University%20of%20Colombo!5e0!3m2!1sen!2slk!4v1644404515370!5m2!1sen!2slk' width='300' height='200' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
			echo"</div>
            </div>";}
            ?>

    </body>
</html>