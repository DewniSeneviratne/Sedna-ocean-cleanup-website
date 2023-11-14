<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>New</title>
</head>

<body>

    <div class="full-container">
        <div class="login-container">
            <h3>Welcome</h3>
         
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" placeholder="enter first name" id="n"/>
                </div>
                <div class="input-group">
                    <label>Description</label>
                    <input type="text" placeholder="enter last name" id="des" />
                </div>
                <div class="input-group">
                    <label>District</label>
                    <input type="text" placeholder="enter city" id="di" />
                </div>
                <div class="input-group">
                    <label>City</label>
                    <input type="text" placeholder="enter city" id="c" />
                </div>
                <div class="input-group">
                    <label>City</label>
                    <input type="file"  id="img" id="img"/>
                </div>
                <button class="login-button" onclick="submit();">Submit</button>
           
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>