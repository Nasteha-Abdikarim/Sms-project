<?php
include "adminheader.php";
include "connection.php";

if(isset($_POST["ESubmit"])){

    $Employeeid = $_POST["Employeeid"];
    $Fullname = $_POST["Fullname"];
    $Contact= $_POST["Contact"];
    $Gender= $_POST["Gender"];
    $Position= $_POST["Position"];
    $Salary= $_POST["Salary"];


    $formQuery = "insert into employeeform(
        Employeeid,
        Fullname,
        Contact,
        Gender,
        Position,
        Salary

    )
    values (
        '$Employeeid',
        '$Fullname',
        '$Contact',
        '$Gender',
        '$Position',
        '$Salary'
    )";
    $result = $dbconnection->query(  $formQuery);

    if($result){
    header("location:employeelist.php");
        
    }
    else {
        echo $dbconnection->connect_error;
    }
       

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Employeeform</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class ="nav">
    <iconify-icon icon="zondicons:view-list" class ="iccon"></iconify-icon>

    <ul>
        <li><iconify-icon icon="bi:person-circle" class ="icon"></iconify-icon></li>
        <li><iconify-icon icon="vaadin:arrows-cross" class ="icon"></iconify-icon></li>
        <li><iconify-icon icon="material-symbols:arrow-circle-right-rounded"class ="icon"></iconify-icon></li>
    </ul>
    </div>
    <br>
    <div class ="forms">
        <h5>Employee Information</h5>
        <div class ="for1">
        <form method="post">
            <input type="text" placeholder= "Employeeid" name ="Employeeid"><br>
            <input type="text" placeholder= "Fullname" name ="Fullname"><br>
            <input type="text" placeholder= "Contact" name ="Contact"><br>
            <input type="text" placeholder= "Gender" name ="Gender"><br>
            <input type="text" placeholder= "Position" name ="Position"><br>
            <input type="text" placeholder= "Salary" name ="Salary"><br>
            <input type="Submit" placeholder= "Submit" name ="ESubmit" class ="submit"><br>
        </form>
        </div>
    </div>
    
</body>
</html>
