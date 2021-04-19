<?php

require("db_connect.php");

//$feedback_id=$_POST['feedback_id'];
$feedback_name=$_POST['feedback_name'];
$feedback_subject=$_POST['feedback_subject'];
$feedback_description=$_POST['feedback_description'];


$sql = "INSERT INTO `feedback` (`feedback_name`,`feedback_subject`,`feedback_description`) VALUES ('$feedback_name','$feedback_subject','$feedback_description')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Record Not Added");
	window.location="feedback_view.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Record Added Successfully");
	window.location="feedback_view.php";
	</script>';
}
//header('location:index.php');

?>