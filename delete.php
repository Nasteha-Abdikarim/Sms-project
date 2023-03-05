<?php
include "connection.php";
if(isset($_GET["Companycode"])){
    $Companycode = $_GET["Companycode"];
    $delete = "delete from companyform  where Companycode =' $Companycode'";
    $res = $dbconnection->query($delete);
    if($res){
        header("location:company.php");
    }
    else{
        echo $dbconnection->connect_error;
    }
}


?>







