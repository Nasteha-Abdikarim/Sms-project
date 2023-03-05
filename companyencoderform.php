<?php
include "adminheader.php";
include "connection.php";

if(isset($_POST["CSubmit"])){

    $Fullname = $_POST["Fullname"];
    $Contact = $_POST["Contact"];
    $Email= $_POST["Email"];
    $Address= $_POST["Address"];
    $Company= $_POST["Company"];
    $Account= $_POST["Account"];


    $formQuery = "insert into companyencoder(
        Fullname,
        Contact,
        Email,
        Address,
        Company,
        Account

    )
    values (
        '$Fullname',
        '$Contact ',
        '$Email',
        '$Address',
        '$Company',
        '$Account'
    )";
    $result = $dbconnection->query(  $formQuery);

    if($result){
        echo "DONE";
    // header("location:company.php"); 
        
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
        <h5>Encode Information</h5>
        <div class ="for1">
        <form method="post">
            <input type="text" placeholder= "Fullname" name ="Fullname"><br>
            <input type="text" placeholder= "Contact" name ="Contact"><br>
            <input type="text" placeholder= "Email" name ="Email"><br>
            <input type="text" placeholder= "Address" name ="Address"><br>
            <input type="text" placeholder= "Company" name ="Company"><br>
            <input type="text" placeholder= "Account" name ="Account"><br>
            <input type="Submit" placeholder= "Submit" name ="CSubmit" class ="submit"><br>
        </form>
        </div>
    </div>
    
</body>
</html>
