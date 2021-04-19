<?php

require("db_connect.php");

$feedback_name=$_POST['feedback_name'];
$feedback_subject=$_POST['feedback_subject'];
$feedback_description=$_POST['feedback_description'];

//echo $feedback_name;
//echo $feedback_subject;
//echo $feedback_description;

$sql = "INSERT INTO `feedback` (`feedback_name`,`feedback_subject`,`feedback_description`) VALUES ('$feedback_name','$feedback_subject','$feedback_description')";

$result = mysqli_query($conn,$sql);

if(! $result)
{
	//die('Could not enter data: ' .mysqli_error()); 
	echo '<script type="text/javascript">
	alert("Feedback Not Sent");
	window.location="feed-back.php";
	</script>';
}
else 
{
	echo '<script type="text/javascript">
	alert("Feedback Sent");
	window.location="index.php";
	</script>';
}
//header('location:index.php');

?>