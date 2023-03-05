<?php
include "connection.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $delete = "delete from payroll  where id =' $id'";
    $res = $dbconnection->query($delete);
    if($res){
        header("location:payroll.php");
    }
    else{
        echo $dbconnection->connect_error;
    }
}


?>







