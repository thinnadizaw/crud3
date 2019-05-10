<?php
include "../conf/dbconfig.php";
$roll_no = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
//select
$sql = "SELECT id, rollno, name, email, phone, address FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["rollno"]. " " . $row["name"]. " " . $row["email"]. " ".$row["phone"]." ".$row["address"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
