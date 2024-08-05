<?php
session_start();
$valid_username="demo";
$valid_password="demo123";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $entered_username=$POST["username"];
    $entered_password=$POST["password"];
    if ($entered_username==$valid_username && $entered_password==$valid_password){
        $_SESSION['username']=$entered_username;
        header("location:welcome.php");
        exit();
        }
    else{
        echo "invalid username or password.";
    }
}
?>