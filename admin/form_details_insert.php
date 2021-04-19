<?php

require("db_connect.php");

//$form_details_id=$_POST['form_details_id'];
$form_details_name=$_POST['form_details_name'];
$form_details_code=$_POST['form_details_code'];


$sql = "INSERT INTO `form_details` (`form_details_name`,`form_details_code`) VALUES ('$form_details_name','$form_details_code')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="form_details_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="form_details_view.php";
	</script>';
}
//header('location:index.php');

?>