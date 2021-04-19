<?php

require("db_connect.php");

$govt_user_id=$_REQUEST['id'];

//$govt_type=$_REQUEST['type']; 

$govt_username=$_REQUEST['username'];

$sql = 'DELETE FROM `govt_user` Where govt_user_id="'.$govt_user_id.'"';

$result = mysqli_query($conn,$sql);

$sql1="delete from login where login_type='govtuser' and login_username='$govt_username'";

$result1=mysqli_query($conn,$sql1);

if(! $result && $result1)
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Deleted");
	window.location="govt_user_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Deleted Successfully");
	window.location="govt_user_view.php";
	</script>';
}

//header('location:govt_user_view.php');

?>