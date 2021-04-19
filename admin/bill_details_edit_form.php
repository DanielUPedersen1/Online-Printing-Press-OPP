<!DOCTYPE html>
<html lang="en">
<head>
<title>bill_details</title>
<meta charset="utf-8">
</head>
<body>

<div>

<?php 

require("db_connect.php"); 

$bill_details_id=$_REQUEST['id'];

//echo $id;

$sql="select * from bill_details where bill_details_id='$bill_details_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="bill_details_update.php" method="post" enctype="multipart/form-data">
<table  border="0" class="" align="center" height="" width="">
<tr style="text-align:center; ">
<td colspan="2">bill_details Edit Form</td>
</tr>

<tr><td><label>Bill_details_id</label></td>
<td><input type="text" placeholder="Bill_details_id" value="<?php echo $row['bill_details_id'] ; ?>" name="bill_details_id" id="bill_details_id" required="required"  /></td>
<tr><td><label>Govt_user_id</label></td>
<td><input type="text" placeholder="Govt_user_id" value="<?php echo $row['govt_user_id'] ; ?>" name="govt_user_id" id="govt_user_id" required="required"  /></td>
<tr><td><label>Bill_details_price</label></td>
<td><input type="text" placeholder="Bill_details_price" value="<?php echo $row['bill_details_price'] ; ?>" name="bill_details_price" id="bill_details_price" required="required"  /></td>
<tr><td><label>Product_details_id</label></td>
<td><input type="text" placeholder="Product_details_id" value="<?php echo $row['product_details_id'] ; ?>" name="product_details_id" id="product_details_id" required="required"  /></td>
<tr><td><label>Bill_details_date</label></td>
<td><input type="text" placeholder="Bill_details_date" value="<?php echo $row['bill_details_date'] ; ?>" name="bill_details_date" id="bill_details_date" required="required"  /></td>

<tr><td colspan="2"><input type="submit"  name="submit" id="submit" value="Update" />   <input type="button"   name="button" id="button" value="Cancel" onclick="window.location.href='bill_details_view.php'" />
</td></tr></table>
</form>

</div>

</body>

</html>