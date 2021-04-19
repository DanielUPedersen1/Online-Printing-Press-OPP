<!DOCTYPE html>
<html lang="en">
<head>
<title>order_details</title>
<meta charset="utf-8">
</head>
<body>

<div>

<?php 

require("db_connect.php"); 

$order_details_id=$_REQUEST['id'];

//echo $id;

$sql="select * from order_details where order_details_id='$order_details_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="order_details_update.php" method="post" enctype="multipart/form-data">
<table  border="0" class="" align="center" height="" width="">
<tr style="text-align:center; ">
<td colspan="2">order_details Edit Form</td>
</tr>

<tr><td><label>Order_details_id</label></td>
<td><input type="text" placeholder="Order_details_id" value="<?php echo $row['order_details_id'] ; ?>" name="order_details_id" id="order_details_id" required="required"  /></td></tr>
<tr><td><label>Product_details_id</label></td>
<td><input type="text" placeholder="Product_details_id" value="<?php echo $row['product_details_id'] ; ?>" name="product_details_id" id="product_details_id" required="required"  /></td></tr>
<tr><td><label>Govt_user_id</label></td>
<td><input type="text" placeholder="Govt_user_id" value="<?php echo $row['govt_user_id'] ; ?>" name="govt_user_id" id="govt_user_id" required="required"  /></td></tr>
<tr><td><label>Order_details_quantity</label></td>
<td><input type="text" placeholder="Order_details_quantity" value="<?php echo $row['order_details_quantity'] ; ?>" name="order_details_quantity" id="order_details_quantity" required="required"  /></td></tr>
<tr><td><label>Order_details_quality</label></td>
<td><input type="text" placeholder="Order_details_quality" value="<?php echo $row['order_details_quality'] ; ?>" name="order_details_quality" id="order_details_quality" required="required"  /></td></tr>
<tr><td><label>Order_details_price</label></td>
<td><input type="text" placeholder="Order_details_price" value="<?php echo $row['order_details_price'] ; ?>" name="order_details_price" id="order_details_price" required="required"  /></td></tr>
<tr><td><label>Order_details_total</label></td>
<td><input type="text" placeholder="Order_details_total" value="<?php echo $row['order_details_total'] ; ?>" name="order_details_total" id="order_details_total" required="required"  /></td></tr>
<tr><td><label>Order_details_sgst</label></td>
<td><input type="text" placeholder="Order_details_sgst" value="<?php echo $row['order_details_sgst'] ; ?>" name="order_details_sgst" id="order_details_sgst" required="required"  /></td></tr>
<tr><td><label>Order_details_cgst</label></td>
<td><input type="text" placeholder="Order_details_cgst" value="<?php echo $row['order_details_cgst'] ; ?>" name="order_details_cgst" id="order_details_cgst" required="required"  /></td></tr>
<tr><td><label>Order_details_finalamount</label></td>
<td><input type="text" placeholder="Order_details_finalamount" value="<?php echo $row['order_details_finalamount'] ; ?>" name="order_details_finalamount" id="order_details_finalamount" required="required"  /></td></tr>
<tr><td><label>Order_details_reqdate</label></td>
<td><input type="text" placeholder="Order_details_reqdate" value="<?php echo $row['order_details_reqdate'] ; ?>" name="order_details_reqdate" id="order_details_reqdate" required="required"  /></td></tr>
<tr><td><label>Order_details_date</label></td>
<td><input type="text" placeholder="Order_details_date" value="<?php echo $row['order_details_date'] ; ?>" name="order_details_date" id="order_details_date" required="required"  /></td></tr>
<tr><td><label>Order_details_status</label></td>
<td><input type="text" placeholder="Order_details_status" value="<?php echo $row['order_details_status'] ; ?>" name="order_details_status" id="order_details_status" required="required"  /></td></tr>

<tr><td colspan="2"><input type="submit"  name="submit" id="submit" value="Update" />   <input type="button"   name="button" id="button" value="Cancel" onclick="window.location.href='order_details_view.php'" />
</td></tr></table>
</form>

</div>

</body>

</html>