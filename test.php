<?php
$conn = mysqli_connect("loxcalhost","root","123@Shubam");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

