<?php

require("db_connect.php");

$form_details_id=$_POST['form_details_id'];
$form_details_name=$_POST['form_details_name'];
$form_details_code=$_POST['form_details_code'];

$sql = 'UPDATE `form_details` SET 
 `form_details_id`='."'$form_details_id'".',
 `form_details_name`='."'$form_details_name'".',
 `form_details_code`='."'$form_details_code'".'
 Where form_details_id="'.$form_details_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="form_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="form_details_view.php";
	</script>';
}

//header('location:form_details_view.php');

?>