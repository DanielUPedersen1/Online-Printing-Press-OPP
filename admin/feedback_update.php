<?php

require("db_connect.php");

$feedback_id=$_POST['feedback_id'];
$feedback_name=$_POST['feedback_name'];
$feedback_subject=$_POST['feedback_subject'];
$feedback_description=$_POST['feedback_description'];

$sql = 'UPDATE `feedback` SET 
 `feedback_id`='."'$feedback_id'".',
 `feedback_name`='."'$feedback_name'".',
 `feedback_subject`='."'$feedback_subject'".',
 `feedback_description`='."'$feedback_description'".'
 Where feedback_id="'.$feedback_id.'"';

$result = mysqli_query($conn,$sql);

if(! $result )
{
	//die('Could not enter data: ' . mysqli_error($conn));

	echo '<script type="text/javascript">
	alert("Record Not Updated");
	window.location="feedback_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Updated Successfully");
	window.location="feedback_view.php";
	</script>';
}

//header('location:feedback_view.php');

?>