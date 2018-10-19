<?php
$conn = mysqli_connect("localhost","root","123@Shubam","OpsTeam");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$uname = $_POST['uname'];
$username='"'.$uname.'"';
$sql = "SELECT Password FROM login where Username= ".$username;
$pass=$_POST['psw'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$real=$row["Password"];       
if (strcmp($real,$pass)==0){
echo "<h1>Connection Successfully Established</h1><br> Welcome ".$uname;  
}  
else{
echo "<h1>Connection Failed!!</h1><br>Invalid PASSWORD";

}
}
} else {
    echo "<h1>Connection Failed!!</h1><br>Invalid EmailID";
}

?>

