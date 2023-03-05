<?php
include "adminheader.php";
include "connection.php";

if(isset($_POST["PSubmit"])){

    $id = $_POST["id"];
    $Company = $_POST["Company"];
    $Employeeid = $_POST["Employeeid"];
    $Grosssalary = $_POST["Grosssalary"];
    $Totaldeduction = $_POST["Totaldeduction"];
    $Netsalary = $_POST["Netsalary"];
    $Datacovarage = $_POST["Datacovarage"];
    $Remarks = $_POST["Remarks"];



    $formQuery = "insert into payroll (
        id,
        Company,
        Employeeid,
        Grosssalary,
        Totaldeduction,
        Netsalary,
        Datacovarage,
        Remarks

    )
    values (
        '$id',
        '$Company ',
        '$Employeeid ',
        '$Grosssalary',
        '$Totaldeduction',
        '$Netsalary ',
        '$Datacovarage ',
        '$Remarks'
    )";
    $result = $dbconnection->query(  $formQuery);

    if($result){
    header("location:payroll.php"); 
        
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
        <h5>Company Information</h5>
        <div class ="for1">
        <form method="post">
            <input type="text" placeholder= "id" name ="id"><br>
            <input type="text" placeholder= "Company" name ="Company"><br>
            <input type="text" placeholder= "Employeeid" name ="Employeeid"><br>
            <input type="text" placeholder= "Grosssalary" name ="Grosssalary"><br>
            <input type="text" placeholder= "Totaldeduction" name ="Totaldeduction"><br>
            <input type="text" placeholder= "Netsalary" name ="Netsalary"><br>
            <input type="text" placeholder= "Datacovarage" name ="Datacovarage"><br>
            <input type="text" placeholder= "Remarks" name ="Remarks"><br>
            <input type="Submit" placeholder= "Submit" name ="PSubmit" class ="submit"><br>
        </form>
        </div>
    </div>
    
</body>
</html>
