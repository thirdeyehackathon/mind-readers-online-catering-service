<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$db=mysqli_select_db($conn,"cat");
if($db)
{
	echo "<br/>"."database selected";
}
$uname=$_POST["username"]; 
$pword=$_POST["password"];
$email= $_POST["email"]; 
$sql = "INSERT INTO login (username, password, email)
VALUES ('$uname','$pword','$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
?>
