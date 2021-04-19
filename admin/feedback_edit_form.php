<!DOCTYPE html>
<html lang="en">
<head>
<title>feedback</title>
<meta charset="utf-8">
</head>
<body>

<div>

<?php 

require("db_connect.php"); 

$feedback_id=$_REQUEST['id'];

//echo $id;

$sql="select * from feedback where feedback_id='$feedback_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="feedback_update.php" method="post" enctype="multipart/form-data">
<table  border="0" class="" align="center" height="" width="">
<tr style="text-align:center; ">
<td colspan="2">feedback Edit Form</td>
</tr>

<tr><td><label>Feedback_id</label></td>
<td><input type="text" placeholder="Feedback_id" value="<?php echo $row['feedback_id'] ; ?>" name="feedback_id" id="feedback_id" required="required"  /></td></tr>
<tr><td><label>Feedback_name</label></td>
<td><input type="text" placeholder="Feedback_name" value="<?php echo $row['feedback_name'] ; ?>" name="feedback_name" id="feedback_name" required="required"  /></td></tr>
<tr><td><label>Feedback_subject</label></td>
<td><input type="text" placeholder="Feedback_subject" value="<?php echo $row['feedback_subject'] ; ?>" name="feedback_subject" id="feedback_subject" required="required"  /></td></tr>
<tr><td><label>Feedback_description</label></td>
<td><input type="text" placeholder="Feedback_description" value="<?php echo $row['feedback_description'] ; ?>" name="feedback_description" id="feedback_description" required="required"  /></td></tr>

<tr><td colspan="2"><input type="submit"  name="submit" id="submit" value="Update" />   <input type="button"   name="button" id="button" value="Cancel" onclick="window.location.href='feedback_view.php'" />
</td></tr></table>
</form>

</div>

</body>

</html>