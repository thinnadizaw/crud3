<?php

include "../conf/dbconfig.php";
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $roll_no = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // echo $id;
    // echo "<br>";
    // echo $roll_no;
    // echo "<br>";
    // echo $roll_no;
    // echo "<br>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $phone;
    // echo "<br>";
    // echo $address;
    // echo "<br>";

    // exit;

    //updating
    $result = mysqli_query($conn, "UPDATE users SET rollno='$roll_no',name='$name',email='$email',phone='$phone',address='$address' WHERE id=$id");
    
//redirecting to index.php
    header("Location: http://localhost/LINNINTERN");
}
?>