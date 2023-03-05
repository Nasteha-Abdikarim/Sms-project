<?php
include "adminheader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>search</title>
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
    <div class ="search1">
        <br><h6>Enter Employee ID</h6>
        <form method="post">
            <input type="text" placeholder ="Enter Empoloyee ID" required name="search1"><br>
            <input type="submit" placeholder ="Submit" class ="sears" name ="searchBtn">
        </form>
        <table>


    <th>Employee ID</th>
    <th>Full name</th>
    <th>Contact</th>
    <th>Position</th>
    <th>Salary</th>
    <th>Contact Person</th>
    <th>Action</th>

    <?php
  

      include "connection.php";

      if(isset($_POST["searchBtn"])){


        $search = $_POST["search1"];
 

     $comQuery = " SELECT * FROM employeeform  WHERE Employeeid = '$search' ";


     $result1 = $dbconnection->query($comQuery);
    
     $table2 ="";

     if ($result1){


        while($row = $result1->fetch_assoc()){

            $table2 .= "<tr>";
            $table2 .= "<td>" . $row["Employeeid"] ."</td>";
            $table2 .= "<td>" . $row["Fullname"] ."</td>";
            $table2 .= "<td>" . $row["Contact"] ."</td>";
            $table2 .= "<td>" . $row["Gender"] ."</td>";
            $table2 .= "<td>" . $row["Position"] ."</td>";
            $table2 .= "<td>" . $row["Salary"] ."</td>";
            
            $deletelinked = "delete.php?"."&Employeeid=".$row["Employeeid"]; 
            $updatelinked = "update.php?" ."&Employeeid=" .$row["Employeeid"]."&Fullname=".$row["Fullname"]
            ."&Contact".$row["Contact"]."&Gender=".$row["Gender"]."&Position=".$row["Position"]."&Salary".$row["Salary"];
 
 
            
 $table2.= "<td>".'<a href="'.$deletelinked.'" class="deleteBtn">DELETE</a>'."</td>";
 $table2.="<td>" .'<a href= "'.$updatelinked.'" class="updatebtn">Update </a>'  ."</td>";

            $table2 .= "</tr>";
         
        }

        echo $table2;
       
     }

     else {
        echo $dbconnection->connect_error;
     }

    }

    ?>
</table>



    </div>
    
</body>
</html>