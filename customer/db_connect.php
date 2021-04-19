<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "GPP";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection

if (!$conn) 
{

echo "<script type='text/javascript'>
	alert('Database Conneciton Error..!');
</script>";
//die("Connection failed: " . mysqli_connect_error());

}

?>    

