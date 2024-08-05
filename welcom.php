<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8 " />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            Login Form
        </title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: lightcyan;
                text-align: center;
                margin: 0;
                padding: 0;
        
            }
            .welcom-containerr{
                max-width: 300px;
                margin: 100px auto;
                padding: 20px;
                background-color: cadetblue;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            
        </style>
    </head>
    <body>
        <div classs="welcom-containerr">
            <h2>Welcome,<?php echo $username; ?> </h2> 
            <p>This is a simple welcome page for the authentication user .</p>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </body>
</html>