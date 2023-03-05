<?php
include "userheader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>company</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
   
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
    <div class="main">



    <div class ="company">
     <div class ="dash1"><iconify-icon icon="fa-solid:search-dollar"></iconify-icon> Salary History</div>
    <div class = "Com1">
        <h4>Home/Salary</h4>
    </div>

    </div>
<br><br><br>
    

<table>


    <th>Gross Salary</th>
    <th>Total Deduction</th>
    <th>Net Salary</th>
    <th>Date Coverage</th>
  

    <?php

    // include "connection.php";
    $salquery = "SELECT * FROM com";
  

      include "connection.php";

     $comQuery = " SELECT * FROM salary";
     $result = $dbconnection->query($comQuery);
     $table2 ="";

     if ($result){
        while($row = $result->fetch_assoc()){
            $table2 .= "<tr>";
            $table2 .= "<td>" . $row["Grossalary"] ."</td>";
            $table2 .= "<td>" . $row["Totaldeduction"] ."</td>";
            $table2 .= "<td>" . $row["Netsalary"] ."</td>";
            $table2 .= "<td>" . $row["Datecovarege"] ."</td>";
       

            $table2 .= "</tr>";
         
        }
        echo $table2;
       
     }

     else {
        echo $dbconnection->connect_error;
     }

    ?>
</table>




    </div>
      
  

    
</body>
</html>









