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
        <br><br><h6>Enter Company Code</h6>
        <form method="post">
            <input type="text" placeholder ="Enter Company code" required name="search1"><br>
            <input type="submit" placeholder ="Submit" class ="sears" name ="searchBtn">
        </form>
        <table>


    <th>Code</th>
    <th>Full Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Contact Person</th>
    <th>Action</th>

    <?php
  

      include "connection.php";

      if(isset($_POST["searchBtn"])){


        $search = $_POST["search1"];
 

     $comQuery = " SELECT * FROM companyform  WHERE Companycode = '$search' ";


     $result1 = $dbconnection->query($comQuery);
    
     $table2 ="";

     if ($result1){


        while($row = $result1->fetch_assoc()){

            $table2 .= "<tr>";
            $table2 .= "<td>" . $row["Companycode"] ."</td>";
            $table2 .= "<td>" . $row["Name"] ."</td>";
            $table2 .= "<td>" . $row["Address"] ."</td>";
            $table2 .= "<td>" . $row["Contact"] ."</td>";
            $table2 .= "<td>" . $row["Email"] ."</td>";
            $table2 .= "<td>" . $row["Contactperson"] ."</td>";
            
           $deletelinked = "delete.php?"."&Companycode=".$row["Companycode"];  
           $updatelinked = "update.php?" ."Comapanycode=" .$row["Companycode"];
           
$table2.= "<td>".'<a href="'.$deletelinked.'" class="deleteBtn">DELETE</a>'."</td>";

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