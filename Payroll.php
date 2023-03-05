<?php
include "adminheader.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Payroll</title>
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
     <div class ="dash1"><iconify-icon icon="game-icons:position-marker"></iconify-icon>Payroll</div>
    <div class = "Com1">
        <h5>Home/Payroll</h5>
    </div>

    </div>

    
    <div class="add">
       <button><a href="payrollform.php">Add New</a></button>
     <div class ="search"><a href="search.php"><input type="text" placeholder ="search"></a></div> 
    </div>

<table>


    <th>ID</th>
    <th>Company</th>
    <th>Employee ID</th>
    <th>Gross Salary</th>
    <th>Total Deduction</th>
    <th>Net Salary</th>
    <th>Date Coverage</th>
    <th>Action</th>
    <th>Action</th>

    <?php
  

      include "connection.php";

     $comQuery = " SELECT * FROM payroll";
     $result = $dbconnection->query($comQuery);
     $table2 ="";

     if ($result){
        while($row = $result->fetch_assoc()){
            $table2 .= "<tr>";
            $table2 .= "<td>" . $row["id"] ."</td>";
            $table2 .= "<td>" . $row["Company"] ."</td>";
            $table2 .= "<td>" . $row["Employeeid"] ."</td>";
            $table2 .= "<td>" . $row["Grosssalary"] ."</td>";
            $table2 .= "<td>" . $row["Totaldeduction"] ."</td>";
            $table2 .= "<td>" . $row["Netsalary"] ."</td>";
            $table2 .= "<td>" . $row["Datacovarage"] ."</td>";
            $table2 .= "<td>" . $row["Remarks"] ."</td>";
            
           $deletelinked = "delete2.php?"."&id=".$row["id"]; 
           $update = "updates.php?" .$row["id"] .$row["Company"] .$row["Employeeid"] .$row["Grosssalary"] .$row["Totaldeduction"] .$row["Netsalary"] .$row["Datacovarage"] .$row["Remarks"];
           $table2.= "<td>" .'<a href="'.$update.'"class="ubpdate"><iconify-icon icon="material-symbols:edit-rounded" class="ubpdateBTN"></iconify-icon></a>' ."</td>";

                    
            $table2.= "<td>".'<a href="'.$deletelinked.'" class="deleteBtn"><iconify-icon icon="ic:baseline-delete" class="deleteBtn1"></iconify-icon></a>'."</td>";
         

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
