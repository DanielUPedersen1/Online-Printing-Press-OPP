<?php

require("db_connect.php");

$admin_id=$_POST['admin_id'];
$admin_name=$_POST['admin_name'];
$admin_address=$_POST['admin_address'];
$admin_contact=$_POST['admin_contact'];
$admin_email=$_POST['admin_email'];
$admin_designation=$_POST['admin_designation'];
/*$admin_username=$_POST['admin_username'];
$admin_password=$_POST['admin_password'];*/
$admin_gender=$_POST['admin_gender'];
$admin_bankname=$_POST['admin_bankname'];
$admin_ifsc=$_POST['admin_ifsc'];
$admin_accno=$_POST['admin_accno'];

$sql = 'UPDATE `admin` SET 
 `admin_id`='."'$admin_id'".',
 `admin_name`='."'$admin_name'".',
 `admin_address`='."'$admin_address'".',
 `admin_contact`='."'$admin_contact'".',
 `admin_email`='."'$admin_email'".',
 `admin_designation`='."'$admin_designation'".',
 `admin_gender`='."'$admin_gender'".',
 `admin_bankname`='."'$admin_bankname'".',
 `admin_ifsc`='."'$admin_ifsc'".',
 `admin_accno`='."'$admin_accno'".'
 Where admin_id="'.$admin_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="admin_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="admin_view.php";
	</script>';
}

//header('location:admin_view.php');

?>