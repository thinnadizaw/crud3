<?php

include "../conf/dbconfig.php";
$roll_no = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
//update
$r1 = mysqli_query($conn, "Update  users SET name='aaa' WHERE phone=23457");
?>