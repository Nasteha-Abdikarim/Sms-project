<?php
include "connection.php";
if(isset($_GET["Employeeid"])){
    $Employeeid = $_GET["Employeeid"];
    $delete = "delete from employeeform  where Employeeid =' $Employeeid'";
    $res = $dbconnection->query($delete);
    if($res){
        header("location:employeelist.php");
    }
    else{
        echo $dbconnection->connect_error;
    }
}


?>







