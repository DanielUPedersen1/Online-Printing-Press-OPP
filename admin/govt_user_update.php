<?php

require("db_connect.php");

$govt_user_id=$_POST['govt_user_id'];
$govt_type=$_POST['govt_type'];
$govt_user_name=$_POST['govt_user_name'];
$govt_user_address=$_POST['govt_user_address'];
$govt_user_contact=$_POST['govt_user_contact'];
$govt_user_email=$_POST['govt_user_email'];
$govt_user_designation=$_POST['govt_user_designation'];
$govt_user_landline=$_POST['govt_user_landline'];

$sql = 'UPDATE `govt_user` SET 
 `govt_user_id`='."'$govt_user_id'".',
 `govt_type`='."'$govt_type'".',
 `govt_user_name`='."'$govt_user_name'".',
 `govt_user_address`='."'$govt_user_address'".',
 `govt_user_contact`='."'$govt_user_contact'".',
 `govt_user_email`='."'$govt_user_email'".',
 `govt_user_designation`='."'$govt_user_designation'".',
 `govt_user_landline`='."'$govt_user_landline'".'
 Where govt_user_id="'.$govt_user_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="govt_user_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="govt_user_view.php";
	</script>';
}

//header('location:govt_user_view.php');

?>