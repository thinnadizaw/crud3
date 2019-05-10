<?php
include "../conf/dbconfig.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
header("Location: http://localhost/LINNINTERN");
?>