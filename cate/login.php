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
else
{
	echo "not selected";
}
function login()
{
	$uname=$_POST['uname'];
	$pword=$_POST['pword'];
	$sql=mysqli_query("select username from login where password=$pword");
	if($sql==$uname)
	{
		echo '<a href="index.html">Index</a>';
	}
}
if (isset($_POST['login'])) {
            login();
    }
?>
