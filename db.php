<?php
$conn = mysqli_connect("localhost", "root", "", "restaurant");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
