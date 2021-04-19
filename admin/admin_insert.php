<?php

require("db_connect.php");

//$admin_id=$_POST['admin_id'];
$admin_name=$_POST['admin_name'];
$admin_address=$_POST['admin_address'];
$admin_contact=$_POST['admin_contact'];
$admin_email=$_POST['admin_email'];
$admin_designation=$_POST['admin_designation'];
$admin_username=$_POST['admin_username'];
$admin_password=$_POST['admin_password'];
$admin_gender=$_POST['admin_gender'];
$admin_bankname=$_POST['admin_bankname'];
$admin_ifsc=$_POST['admin_ifsc'];
$admin_accno=$_POST['admin_accno'];

$login_type="admin";


$sql = "INSERT INTO `admin` (`admin_name`,`admin_address`,`admin_contact`,`admin_email`,`admin_designation`,`admin_username`,`admin_password`,`admin_gender`,`admin_bankname`,`admin_ifsc`,`admin_accno`) VALUES ('$admin_name','$admin_address','$admin_contact','$admin_email','$admin_designation','$admin_username','$admin_password','$admin_gender','$admin_bankname','$admin_ifsc','$admin_accno')";

$result = mysqli_query($conn,$sql);

$sql1="insert into login(`login_username`,`login_password`,`login_type`) values('$admin_username','$admin_password','$login_type')";

$result1=mysqli_query($conn,$sql1);

if(! $result && $result1)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="admin_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="admin_view.php";
	</script>';
}
//header('location:index.php');

?>