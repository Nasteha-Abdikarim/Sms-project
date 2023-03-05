<?php
    // session_start();
    // if(isset($_SESSION["Username"])){

    // }
    // else {
    //     header("location:login.php");
    // }

    ?>
<?php
include "adminheader.php";

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
     <div class ="dash1"><iconify-icon icon="mdi:office-building"></iconify-icon>Company</div>
    <div class = "Com1">
        <h5>Home/Company</h5>
    </div>

    </div>

    
    <div class="add">
       <button><a href="companyform.php">Add New</a></button>
     <div class ="search"><a href="search.php"><input type="text" placeholder ="search"></a></div> 
    </div>

<table>


    <th>Code</th>
    <th>Full Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Contact Person</th>
    <th>Action</th>
    <th>Action</th>

    <?php
  

      include "connection.php";

     $comQuery = " SELECT * FROM companyform";
     $result = $dbconnection->query($comQuery);
     $table2 ="";

     if ($result){
        while($row = $result->fetch_assoc()){
            $table2 .= "<tr>";
            $table2 .= "<td>" . $row["Companycode"] ."</td>";
            $table2 .= "<td>" . $row["Name"] ."</td>";
            $table2 .= "<td>" . $row["Address"] ."</td>";
            $table2 .= "<td>" . $row["Contact"] ."</td>";
            $table2 .= "<td>" . $row["Email"] ."</td>";
            $table2 .= "<td>" . $row["Contactperson"] ."</td>";
            
           $deletelinked = "delete.php?"."&Companycode=".$row["Companycode"]; 
           $update = "updates.php?" .$row["Companycode"] .$row["Name"] .$row["Address"] .$row["Contact"] .$row["Email"] .$row["Contactperson"];
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









