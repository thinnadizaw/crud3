<?php

include "../conf/dbconfig.php";
$roll_no = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
// echo "create complete";
// echo $roll_no;
// echo "<br>";

// echo $name;
// echo "<br>";


// echo $email;
// echo "<br>";


// echo $address;
// echo "<br>";

// echo $phone;
// echo "<br>";
//insert
$result = mysqli_query($conn, "Insert INTO users(rollno, name,email,phone,address) VALUES('$roll_no','$name','$email','$phone','$address')");

//update
$r1 = mysqli_query($conn, "Update  users SET name='aaa' WHERE phone=23457");
?>