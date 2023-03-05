<?php
include "adminheader.php";
include "connection.php";

if(isset($_POST["Submit"])){

    $CompanyCode = $_POST["Companycode"];
    $Name = $_POST["Name"];
    $Address= $_POST["Address"];
    $Contact= $_POST["Contact"];
    $Email= $_POST["Email"];
    $Contactperson= $_POST["Contactperson"];


    $formQuery = "insert into companyform(
        Companycode,
        Name,
        Address,
        Contact,
        Email,
        Contactperson

    )
    values (
        '  $CompanyCode',
        '   $Name',
        '  $Address',
        '   $Contact',
        '  $Email',
        '    $Contactperson'
    )";
    $result = $dbconnection->query(  $formQuery);

    if($result){
    header("location:company.php"); 
        
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
            <input type="text" placeholder= "Company Code" name ="Companycode"><br>
            <input type="text" placeholder= "Name" name ="Name"><br>
            <input type="text" placeholder= "Address" name ="Address"><br>
            <input type="text" placeholder= "Contact" name ="Contact"><br>
            <input type="text" placeholder= "Email" name ="Email"><br>
            <input type="text" placeholder= "Contact person" name ="Contactperson"><br>
            <input type="Submit" placeholder= "Submit" name ="Submit" class ="submit"><br>
        </form>
        </div>
    </div>
    
</body>
</html>
