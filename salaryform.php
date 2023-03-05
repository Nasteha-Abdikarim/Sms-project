<?php
include "userheader.php";
include "connection.php";

if(isset($_POST["Dsubmit"])){

    $Grossalary = $_POST["Grossalary"];
    $Totaldeduction = $_POST["Totaldeduction"];
    $Netsalary = $_POST["Netsalary"];
    $Datecovarege = $_POST["Datecovarege"];
   


    $formQuery = "insert into salary(
        Grossalary,
        Totaldeduction,
        Netsalary,
        Datecovarege

    )
    values (
        '   $Grossalary',
        '    $Totaldeduction',
        '   $Netsalary',
        '     $Datecovarege'
    )";
    $result = $dbconnection->query(  $formQuery);

    if($result){
    header("location:salary.php"); 
        
    }
    else {
        echo $dbconnection->connect_error;
    }
       

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>companyform</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div class ="forms">
        <h5>Company Information</h5>
        <div class ="for1">
        <form method="post">
            <input type="text" placeholder= "Grossalary" name ="Grossalary"><br>
            <input type="text" placeholder= "Totaldeduction" name ="Totaldeduction"><br>
            <input type="text" placeholder= "Netsalary" name ="Netsalary"><br>
            <input type="text" placeholder= "Datecovarege" name ="Datecovarege"><br>
            <input type="Submit" placeholder= "Submit" name ="Dsubmit" class ="submit"><br>
        </form>
        </div>
    </div>
    
</body>
</html>
