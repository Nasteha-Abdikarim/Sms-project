<?php
$dbconnection = new mysqli("localhost","root","","smsproject");
if($dbconnection){
    // echo "connected";
}
else {
    echo $dbconnection->connected_error;
}


?>