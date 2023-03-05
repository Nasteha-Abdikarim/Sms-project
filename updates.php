<?php

include "adminheader.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>updates</title>
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
    <?php

    include "connection.php";
    error_reporting(0);
    

    
if(isset($_GET["Companycode"])){

    $CompanyCode = $_GET["Companycode"];
    $Name = $_GET["Name"];
    $Address= $_GET["Address"];
    $Contact= $_GET["Contact"];
    $Email= $_GET["Email"];
    $Contactperson= $_GET["Contactperson"];

}

    ?>
<div class ="forms">
    <br>
        <h5>Update</h5>
        <div class ="for1">
<form method="post">
            <input type="text" placeholder= "Company Code" name ="Companycode" value="<?php echo   $CompanyCode; ?>">  <br>                 
            <input type="text" placeholder= "Name" name ="Name" value="<?php echo      $Name ; ?>">    <br>                             
            <input type="text" placeholder= "Address" name ="Address" value="<?php echo    $Address; ?>">   <br>                        
            <input type="text" placeholder= "Contact" name ="Contact" value="<?php echo    $Contact; ?>">   <br>                                 
            <input type="text" placeholder= "Email" name ="Email" value="<?php echo      $Email; ?>"><br>
            <input type="text" placeholder= "Contact person" name ="Contactperson" value="<?php echo    $Contactperson; ?>">   <br>                       
            <input type="Submit" placeholder= "Submit" name ="Submit" class ="submit" >    <br>            
        </form>
        </div>
        </div>

    <?php

    
if(isset($_POST["Submit"])){

    $CompanyCode = $_POST["Companycode"];
    $Name = $_POST["Name"];
    $Address= $_POST["Address"];
    $Contact= $_POST["Contact"];
    $Email= $_POST["Email"];
    $Contactperson= $_POST["Contactperson"];

    $updatequery = "upadate companyform set Name ='$Name', Address ='$Address', Contact='$Contact',
    Email ='$Email', Contactperson ='$Contactperson' where Companycode ='$Companycode'";
$result = $dbconnection->query($updatequery);

    if($result){
        header("location:company.php"); 
            
        }
        else {
            echo $dbconnection->connect_error;
        }

}



?>
</body>
</html>