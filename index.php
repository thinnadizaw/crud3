<?php
//including the database connection file
include "conf/dbconfig.php";
 

$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
$res = mysqli_fetch_array($result);
//  var_dump($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linn Internship Program</title>
    <style>
    .banner_div{
    background-color : green;
    width:100%;
    height:50px;

    }
    .banner_table{
        
        width:100%;
        height:auto;
    }
    .footer{
        background-color : red;
        position: fixed;
        left:0;
        bottom:0;
        width:100%;
        color:white;
       text-align=center;
    }
        .banner_mar{
            margin left:600px;
        }
    </style>
</head>
<body>
    <div class="banner_div" align="center">
        <h1 id="banner_title">Linn Internship Program</h1>
    </div>
    <br>
    <a href="create.php">
     <input type="button"  value="Add new student"></a>
     <br><br>

     <caption>Internship Student listing</caption>
     <div class="banner_mar"align="center">
     <table class="banner_mar" border = "1px solid black " style="width:100%">
    <tr>
      <th>Roll No</th>
      <th>Name</th>
        <th>Email</th>
      <th>Phone</th>
       <th>Address</th>
       <th>Action</th>
    </tr>
        
                    <?php 
       					 //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
				        while($res = mysqli_fetch_array($result)) {         
				            echo "<tr>";
				            echo "<td>".$res['rollno']."</td>";
				            echo "<td>".$res['name']."</td>";
				            echo "<td>".$res['email']."</td>";
				            echo "<td>".$res['phone']."</td>";
                            echo "<td>".$res['address']."</td>"; 
                            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"query/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";      
                            echo "</tr>";
				        }
				    ?>
    
  </table>
  
    
    <div class="footer">
    <p>well done</p>
    </div>

</body>
</html>