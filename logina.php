<!DOCTYPE html>
<html lang="en">
<head>

    <title>userlogin</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<style>

    body{
        background-color: #3C6255;;
    }
</style>
<body>

<div class ="login">
    

<form method="post">

    <input type="text" placeholder ="username"  name="Username"><br>
    <input type="password" placeholder ="Password"  name="Password"><br>
    <input type="submit" values= "submit" name="submitBtn" class ="loginbtn">
</form>

</div>
<?php
include "connection.php";

if(isset($_POST["submitBtn"])){

    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $checkbox = "Select * from logina where Username = '$username' and Password = '$password' ";
    
    $test = $dbconnection->query($checkbox);
    $row = mysqli_num_rows($test);

    if ($row < 1){
        echo "Username or password incorrected";
    }

    else {
        //$_SESSION["Username"] =   $username ;
        
        header ("Location: salary.php");
    }
}
?>

</div>


    
</body>
</html>