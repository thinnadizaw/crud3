<?php
//including the database connection file
include "conf/dbconfig.php";
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM users where id=$id");
while($res = mysqli_fetch_array($result))
{
    $roll_no = $res['rollno'];
    $name = $res['name'];
    $email = $res['email'];
    $phone = $res['phone'];
    $address = $res['address'];

}
//echo $roll_no;
//echo "<br>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $phone;
//echo "<br>";
//echo $address;
//echo "<br>";
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
     <div class="banner_mar" align="center">
     <form action="query/update1.php" method="post">
        <label>Roll No</label><br>
        <input type="text" name="rollno" value="<?php echo $roll_no;?>"><br>
        <label>Name</label><br>
        <input type="text" name="name" value="<?php echo $name;?>"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="<?php echo $email;?>"><br>
        <label>Phone</label><br>
        <input type="text" name="phone" value="<?php echo $phone;?>"><br>
        <label>Address</label><br>
        <input type="textarea" name="address" value="<?php echo $address;?>"><br>
        <br>
        
       <input type="hidden" name="id" value="<?php echo $id;?>".>
       <input type="submit"  name="update" value="Update"><br>
     </form>
    </div>
    <div class="footer">
    <p>well done</p>
    </div>

</body>
</html>